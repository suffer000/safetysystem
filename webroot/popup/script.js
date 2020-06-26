'use strict';
{
const hiraku = document.getElementById('open');
const tojiru = document.getElementById('close');
const modal = document.getElementById('modal');
const kakusu = document.getElementById('mask');

hiraku.addEventListener('click', function () {
 modal.classList.remove('hidden');
 kakusu.classList.remove('hidden');
});
tojiru.addEventListener('click', function () {
 modal.classList.add('hidden');
 kakusu.classList.add('hidden');
});
kakusu.addEventListener('click', function () {
 modal.classList.add('hidden');
 kakusu.classList.add('hidden');
});
}