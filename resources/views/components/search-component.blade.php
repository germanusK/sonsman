<div class="w-full">
    <form action="" method="post" class="w-full py-1 flex flex-wrap justify-evenly items-center text-stone-800 bg-transparent ">
        
        <div class=" bg-transparent px-2">
            <label for="group" class="text-sm text-stone-400 w-full">select group:</label>
            <select name="group" id="s-group" onchange="getCategories(evt)" class="active:border-0 active:border-b focus:border-0 focus:border-b border-0 border-b border-b-stone-300 my-2 w-full">
                <option value="" selected>select group</option>
                <option value="RE">Real Estate</option>
                <option value="GC">General Commerce</option>
            </select>
        </div>

        <div class=" bg-transparent px-2">
            <label for="category" class="text-sm text-stone-400 w-full">select category:</label>
            <select name="category" id="s-category" onchange="getGrades(evt)" class="active:border-0 active:border-b focus:border-0 focus:border-b border-0 border-b border-b-stone-300 my-2 w-full">
                <option value="" selected>select category</option>
            </select>
        </div>

        <div class=" bg-transparent px-2">
            <label for="grade" class="text-sm text-stone-400 w-full">select grade:</label>
            <select name="grade" id="s-grade" onchange="getGrades(evt)" class="active:border-0 active:border-b focus:border-0 focus:border-b border-0 border-b border-b-stone-300 my-2 w-full">
                <option value="" selected>select grade</option>
            </select>
        </div>
        <button type="submit" class="rounded-full text-stone-800 flex align-middle"><span class="fa fa-share-square text-stone-800 text-xl mx-1"></span>search</button>
   
    </form>
</div>