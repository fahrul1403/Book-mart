function Visiteds(element)
		{
			var mainItem = element.id;
			var itemClicked = element.parentElement;
			var parents = itemClicked.parentElement;
			var childs = parents.children;
			

			for(var i = 0; i<childs.length; i++)
			{
				console.log(childs[i]);
				console.log(mainItem);
				console.log(childs[i].children[0].id);

				if(childs[i].children[0].id == mainItem)
				{
					childs[i].classList.add("active");
				}
				else if(childs[i].classList.contains("active"))
				{
					childs[i].classList.remove("active");
				}

			}
			
		}
