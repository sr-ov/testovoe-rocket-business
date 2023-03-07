import JustValidate, { Rules } from 'just-validate'

const PHONE_NUMBER_RU = /^\+7\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$/

const requiredField = {
	rule: Rules.Required,
	errorMessage: 'Обязательное поле',
}

const validate = new JustValidate('#form')
validate.addField('#user-name', [requiredField]).addField('#user-phone', [
	requiredField,
	{
		rule: Rules.CustomRegexp,
		value: PHONE_NUMBER_RU,
		errorMessage: 'Введите номер правильно',
	},
])
