function mostramsg(msg) {
  $('#dMsg').text(msg)
  setTimeout(() => {
    $('#dMsg').text('')
  }, 3000)
}

function fValida() {
  const vmodelocarro = $('#modelocarro').val()
  const vplacacarro = $('#placacarro').val()
  const vmotorista = $('#motorista').val()
  const vorigem = $('#origem').val()
  const vdestino = $('#destino').val()
  const vkm = $('#km').val()
  const vcombustivel = $('#combustivel').val()
  const vvalorcombustivel = $('#valorcombustivel').val()

  let valido = true

  if (vmodelocarro == '') {
    mostramsg('Modelo do carro é obrigatório')
    $('#modelocarro').focus()
    valido = false
  } else if (vplacacarro == '') {
    mostramsg('Placa do carro é obrigatório')
    $('#placacarro').focus()
    valido = false
  } else if (vmotorista == '') {
    mostramsg('Nome do motorista é obrigatório')
    $('#motorista').focus()
    valido = false
  } else if (vorigem == '') {
    mostramsg('Local de origem é obrigatório')
    $('#origem').focus()
    valido = false
  } else if (vdestino == '') {
    mostramsg('Local de destino é obrigatório')
    $('#destino').focus()
    valido = false
  } else if (vkm == '') {
    mostramsg('Km percorrido é obrigatório')
    $('#km').focus()
    valido = false
  } else if (vcombustivel == '') {
    mostramsg('Litro gasto de combustível é obrigatório')
    $('#combustivel').focus()
    valido = false
  } else if (vvalorcombustivel == '') {
    mostramsg('Preco do combustível é obrigatório')
    $('#valorcombustivel').focus()
    valido = false
  }
  return valido
}
$(document).ready(function () {
  $('#fCadastro').submit(function () {
    return fValida()
  })
})
