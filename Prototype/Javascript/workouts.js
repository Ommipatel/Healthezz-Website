let selectedLevel = '';
let selectedMuscles = [];

function selectLevel(button, level) {
    const buttons = document.querySelectorAll('.fitness-levels button');
    buttons.forEach(btn => btn.classList.remove('active')); // remove other buttons if selected
    
    button.classList.add('active'); //add selected button styling
    selectedLevel= level;

    const muscleGroups = document.getElementById('muscle-groups');
    muscles.classList.remove('hidden'); //show muscle title
    muscleGroups.classList.remove('hidden'); //show muscle groups
    setTimeout(() => {
        muscleGroups.classList.add('fade-in');
    }, 10); //small delay for browser to render fade
}

function selectMuscle(button, muscle) {
    if (button.classList.contains('active')) {
        button.classList.remove('active');
        selectedMuscles = selectedMuscles.filter(m => m !== muscle);
    } else {
        button.classList.add('active');
        selectedMuscles.push(muscle);
    }
}

function generatePlan() {
    if (!selectedLevel || selectedMuscles.length === 0) {
        alert('Please select a fitness level and at least one muscle group.');
        return;
    }

    const planContainer = document.createElement('div'); //create the plan div
    planContainer.classList.add('exercise-plan'); // add styling
    //add header for each muscle group
    selectedMuscles.forEach(muscle => {
        const muscleExercises = exercises[selectedLevel][muscle];
        if (muscleExercises) {
            const muscleTitle = document.createElement('h3');
            muscleTitle.textContent = muscle;
            planContainer.appendChild(muscleTitle);
            
            // add exercises to each muscle group based on fitness level and groups selected
            const exerciseList = document.createElement('ul');
            muscleExercises.forEach(ex => {
                const exerciseItem = document.createElement('li');
                exerciseItem.textContent = `${ex.exercise}, ${ex.sets} sets, ${ex.reps} reps`;
                exerciseList.appendChild(exerciseItem);
            });
            planContainer.appendChild(exerciseList);
        }
    });

    const content = document.querySelector('.content');
    const existingPlan = document.querySelector('.exercise-plan');

    //replace plan if already generated
    if (existingPlan) {
        existingPlan.remove();
    }
    content.appendChild(planContainer);
}

const exercises = {
    beginner: {
        Chest: [
            { exercise: 'Push-Ups', sets: 3, reps: 10 },
            { exercise: 'Chest Press', sets: 3, reps: 12 }
        ],
        Back: [
            { exercise: 'Pull-Ups', sets: 3, reps: 5 },
            { exercise: 'Bent Over Rows', sets: 3, reps: 10 }
        ],
        Arms: [
            { exercise: 'Bicep Curls', sets: 3, reps: 12 },
            { exercise: 'Tricep Dips', sets: 3, reps: 10 }
        ],
        Shoulders: [
            { exercise: 'Shoulder Press', sets: 3, reps: 10 },
            { exercise: 'Lateral Raises', sets: 3, reps: 12 }
        ],
        Legs: [
            { exercise: 'Squats', sets: 3, reps: 15 },
            { exercise: 'Lunges', sets: 3, reps: 12 }
        ],
        Abs: [
            { exercise: 'Crunches', sets: 3, reps: 15 },
            { exercise: 'Planks', sets: 3, duration: '30s' }
        ]
    },
    intermediate: {
        Chest: [
            { exercise: 'Bench Press', sets: 4, reps: 8 },
            { exercise: 'Incline Dumbbell Press', sets: 4, reps: 10 }
        ],
        Back: [
            { exercise: 'Deadlifts', sets: 4, reps: 6 },
            { exercise: 'Lat Pulldowns', sets: 4, reps: 10 }
        ],
        Arms: [
            { exercise: 'Hammer Curls', sets: 4, reps: 10 },
            { exercise: 'Skull Crushers', sets: 4, reps: 8 }
        ],
        Shoulders: [
            { exercise: 'Arnold Press', sets: 4, reps: 8 },
            { exercise: 'Front Raises', sets: 4, reps: 12 }
        ],
        Legs: [
            { exercise: 'Leg Press', sets: 4, reps: 12 },
            { exercise: 'Calf Raises', sets: 4, reps: 15 }
        ],
        Abs: [
            { exercise: 'Russian Twists', sets: 4, reps: 20 },
            { exercise: 'Hanging Leg Raises', sets: 4, reps: 12 }
        ]
    },
    advanced: {
        Chest: [
            { exercise: 'Decline Bench Press', sets: 5, reps: 6 },
            { exercise: 'Cable Crossovers', sets: 5, reps: 12 }
        ],
        Back: [
            { exercise: 'T-Bar Rows', sets: 5, reps: 8 },
            { exercise: 'Seated Cable Rows', sets: 5, reps: 10 }
        ],
        Arms: [
            { exercise: 'Preacher Curls', sets: 5, reps: 10 },
            { exercise: 'Close Grip Bench Press', sets: 5, reps: 8 }
        ],
        Shoulders: [
            { exercise: 'Overhead Press', sets: 5, reps: 8 },
            { exercise: 'Reverse Flyes', sets: 5, reps: 12 }
        ],
        Legs: [
            { exercise: 'Front Squats', sets: 5, reps: 8 },
            { exercise: 'Bulgarian Split Squats', sets: 5, reps: 10 }
        ],
        Abs: [
            { exercise: 'Decline Sit-Ups', sets: 5, reps: 20 },
            { exercise: 'Ab Rollouts', sets: 5, reps: 12 }
        ]
    }
};