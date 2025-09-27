# inputBotInlineMessageMediaContact

**Description** : *A contact*

**Layer** : 216

```tl
inputBotInlineMessageMediaContact#a6edbffd flags:# phone_number:string first_name:string last_name:string vcard:string reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>phone_number</mark> | [`string`](type/string) | Phone number |
| <mark>first_name</mark> | [`string`](type/string) | First name |
| <mark>last_name</mark> | [`string`](type/string) | Last name |
| <mark>vcard</mark> | [`string`](type/string) | VCard info |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[InputBotInlineMessage](type/InputBotInlineMessage)

---

## Example

```php
$inputBotInlineMessage = $client->inputBotInlineMessageMediaContact(
	phone_number : '+1234567890',
	first_name : 'Tak',
	last_name : 'None',
	vcard : 'jikvODbpt7h4zdqF',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```