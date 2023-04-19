const selectLab = document.querySelector('select[name="laboratorium"]');
const inputPenanggungJawab = document.querySelector('input[readonly]');

// Add event listener to the select element
selectLab.addEventListener('change', () => {
  // Get the selected option value
  const selectedLab = selectLab.value;

  // Update the value of the input element
  inputPenanggungJawab.value = getPenanggungJawab(selectedLab);
});

// Function to get the penanggung jawab based on the selected lab
function getPenanggungJawab(selectedLab) {
  switch (selectedLab) {
    case 'iot':
      return 'Asisten 1';
    case 'startup':
      return 'Asisten 2';
    case 'jaringan':
      return 'Asisten 3';
    case 'multimedia':
      return 'Asisten 4';
    case 'microcontroller':
      return 'Asisten 5';
    case 'Computer system':
      return 'Asisten 6';
    default:
      return '';
  }
}


