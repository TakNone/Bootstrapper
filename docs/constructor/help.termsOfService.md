# help.termsOfService

**Description** : *Info about the latest telegram Terms Of Service*

**Layer** : 218

```tl
help.termsOfService#780a0310 flags:# popup:flags.0?true id:DataJSON text:string entities:Vector<MessageEntity> min_age_confirm:flags.1?int = help.TermsOfService;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **popup** | [`flags.0?true`](type/true) | Whether a prompt must be showed to the user, in order to accept the new terms |
| <mark>id</mark> | [`DataJSON`](type/DataJSON) | ID of the new terms |
| <mark>text</mark> | [`string`](type/string) | Text of the new terms |
| <mark>entities</mark> | [`Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **min_age_confirm** | [`flags.1?int`](type/int) | Minimum age required to sign up to telegram, the user must confirm that they is older than the minimum age |

---

## Type

[help.TermsOfService](type/help.TermsOfService)

---

## Example

```php
$helpTermsOfService = $client->help->termsOfService(
	popup : true,
	id : $client->dataJSON(
		data : 'GvilNQuWrVn7s2Fo',
	),
	text : '7gIipEeMHkfN0Az2',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 52,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 59,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 57,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 10,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 23,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 51,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 66,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 75,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 88,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 15,
			language : 'eDXEO0dHGKyoIPZq',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 42,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 87,
			user_id : -6723276061198699094,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 70,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 86,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 44,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 8,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 64,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 75,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 18,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 98,
			document_id : -605132339193338779,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 87,
		),
	),
	min_age_confirm : 29,
);
```