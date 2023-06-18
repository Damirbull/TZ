let id = null;
async function getPosts() {
  try {
    let res = await fetch('http://api.ru/posts');
    if (!res.ok) {
      throw new Error('Error fetching posts');
    }
    let posts = await res.json();
    
    let postListElement = document.querySelector('.post-list');
      
    document.querySelector ('.post-list').innerHTML = '';
    posts.forEach((post) => {
      document.querySelector ('.post-list').innerHTML += `
        <div class="card" style="...">
          <div class="card-body">
            <h5 class="card-title">${post.brand}</h5>
            <h6 class="card-subtitle">${post.model}</h6>
            <p class="card-text">Body Color: ${post.bodycolor}</p>
            <p class="card-text">Status: ${post.Status}</p>
            <p class="card-text">State Number: ${post.StatenumberoftheRussianFederation}</p>
            <a href="#" class="card-link">Read More</a>
            <a href="#" class="card-link" onclick="removePost(${post.id})">Удалить</a>
            <a href="#" class="card-link" onclick="editPost('${post.id}', '${post.brand}', '${post.model}', '${post.bodycolor}', '${post.Status}')">Редактировать</a>
          </div>
        </div>`;
    });
  } catch (error) {
    console.error(error);
  }
}

async function addPost() {
    const brandInput = document.getElementById('brandInput').value;
    const modelInput = document.getElementById('modelInput').value;
    const bodycolorInput = document.getElementById('bodycolorInput').value;
    const stateNumberInput = document.getElementById('stateNumberInput').value;
    const statusInput = document.getElementById('statusInput').value;
    
    let formData = new FormData();
    formData.append('brand', brandInput);
    formData.append('bodycolor', bodycolorInput);
    formData.append('model', modelInput);
    formData.append('stateNumber', stateNumberInput);
    formData.append('status', statusInput);
    
    const res = await fetch('http://api.ru/posts', {
        method: 'POST',
        body: formData
    });
    
    const data = await res.json();
    console.log(data);
    if (data.status === true) {
        await getPosts();
    }
}

async function removePost(id) {
  const res = await fetch(`http://api.ru/posts/${id}`, {
    method: "DELETE"
  });

  const data = await res.json();
  if (data.status === true) {
    await getPosts();
  }
}

function editPost(id, brand, bodycolor, model, status) {
    document.getElementById('brand-Input').value = brand;
    document.getElementById('model-Input').value = model;
    document.getElementById('bodycolor-Input').value = bodycolor;
    document.getElementById('status-Input').value = status;
}



getPosts();