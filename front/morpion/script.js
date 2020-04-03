$(document).ready(function() {
    
    clickPlay()
    resetGame()

})

function clickPlay() {
    //var activeField = "`#${i}-${u}`"
    var activePlayer = 1
    var turnCount = 0
    for (let i = 1; i <= 3 ; i++) {
        for (let u = 1; u <= 3; u++) {
            $(`#${i}-${u}`).click(function() {
               if (activePlayer == 1) { 
                   $(`#${i}-${u}`).text('X')
                   console.log(`${i}-${u} X`)
                   activePlayer = 2 
                } else {
                    $(`#${i}-${u}`).text('O')
                    console.log(`${i}-${u} O`)
                   activePlayer = 1
                }
                $(`#${i}-${u}`).off('click')
                console.log(`${i}-${u} click off`)
                turnCount++
                if (turnCount === 9) {
                    console.log('Match nul')
                } else {
                    checkVictory()
                }
                
            })
        }
    }
}

function checkVictory() {
    //var activeField = "`#${i}-${u}`"
    var p1Victory = 0
    var p2Victory = 0
    var p1VictoryDiag = 0
    var p2VictoryDiag = 0
    
        //horizontal verification loop
    for (let i = 1; i <= 3 ; i++) {
        for (let u = 1; u <= 3; u++) {
            if ($(`#${i}-${u}`).text() === 'X') {
                p1Victory++
            }
            else if ($(`#${i}-${u}`).text() === 'O') {
                p2Victory++
            }
            if (i+u === 4 && $(`#${i}-${u}`).text() === 'X') {
                p1VictoryDiag++
            }
            else if (i+u === 4 && $(`#${i}-${u}`).text() === 'O') {
                p2VictoryDiag++
            }
            if (p1Victory === 3 || p1VictoryDiag === 3) {
                console.log('Victory p1')
                $('td').off('click')
            }
            else if (p2Victory === 3 || p2VictoryDiag === 3) {
                console.log('Victory p2')
                $('td').off('click')
            }
            else if (u === 3) {
                p1Victory = 0
                p2Victory = 0
            }
        }
    }
        //vertical verification loop
    p1Victory = 0
    p1VictoryDiag = 0
    p2Victory = 0
    p2VictoryDiag = 0
    
    for (let i = 1; i <= 3 ; i++) {
        for (let u = 1; u <= 3; u++) {
            if ($(`#${u}-${i}`).text() === 'X') {
                p1Victory++
            }
            else if ($(`#${u}-${i}`).text() === 'O') {
                p2Victory++
            }
            if (i === u && $(`#${i}-${u}`).text() === 'X') {
                p1VictoryDiag++
            }
            else if (i === u && $(`#${i}-${u}`).text() === 'O') {
                p2VictoryDiag++
            }
            if (p1Victory === 3 || p1VictoryDiag === 3) {
                console.log('Victory p1')
                $('td').off('click')
            }
            else if (p2Victory === 3 || p2VictoryDiag === 3) {
                console.log('Victory p2')
                $('td').off('click')
            }
            else if (u === 3) {
                p1Victory = 0
                p2Victory = 0
            }
        }
    }  
}

function resetGame() {
    $('#reset').click(function() {
        $('td').text('')

    })
}