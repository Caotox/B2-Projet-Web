document.addEventListener('alpine:init', () => {
    Alpine.data('loveTips', () => ({
        tips: [
            'Communiquez ouvertement',
            'Soyez attentif aux besoins de votre partenaire',
            'Cultivez la confiance et le respect mutuel',
            'Partagez des activités ensemble',
            'Exprimez votre gratitude',
            'Pratiquez la bienveillance',
            'Soyez patient',
            'Faites preuve de compassion',
            'Soyez honnête',
            'Soyez présent',
            'Soyez positif',
            'Faîtes preuve de tolérance',
            'Ecoutez nos Experts en Séduction',
            'Ecoutez votre coeur',
        ],
        showTip: false,
        newTip: '',

        addTip() {
            if (this.newTip.trim() !== '') {
                this.tips.push(this.newTip.trim());
                this.newTip = '';
                alert('Nouveau conseil ajouté !');
            }
        },
    }));

    Alpine.data('coachInteractions', () => ({
        selectedCoach: null,
        selectCoach(name) {
            this.selectedCoach = name;
        },
    }));
});
