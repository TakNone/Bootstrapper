# help.termsOfService

**Description** : *Info about the latest telegram Terms Of Service*

**Layer** : 214

```tl
help.termsOfService#780a0310 flags:# popup:flags.0?true id:DataJSON text:string entities:Vector<MessageEntity> min_age_confirm:flags.1?int = help.TermsOfService;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
		data : 'x5RDzZbYwovBTpPO',
	),
	text : 'KZmW3GAckvOJqT5M',
	entities : array(
		$client->messageEntityUnknown(
			offset : 64,
			length : 89,
		),
		$client->messageEntityMention(
			offset : 81,
			length : 58,
		),
		$client->messageEntityHashtag(
			offset : 33,
			length : 57,
		),
		$client->messageEntityBotCommand(
			offset : 52,
			length : 19,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 1,
		),
		$client->messageEntityEmail(
			offset : 53,
			length : 62,
		),
		$client->messageEntityBold(
			offset : 43,
			length : 80,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 45,
		),
		$client->messageEntityCode(
			offset : 29,
			length : 46,
		),
		$client->messageEntityPre(
			offset : 18,
			length : 97,
			language : 'Sl1vh0Xt3aymPAkr',
		),
		$client->messageEntityTextUrl(
			offset : 25,
			length : 3,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 86,
			length : 68,
			user_id : -8553767412439828092,
		),
		$client->inputMessageEntityMentionName(
			offset : 89,
			length : 11,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 19,
			length : 62,
		),
		$client->messageEntityCashtag(
			offset : 9,
			length : 3,
		),
		$client->messageEntityUnderline(
			offset : 46,
			length : 59,
		),
		$client->messageEntityStrike(
			offset : 11,
			length : 91,
		),
		$client->messageEntityBankCard(
			offset : 43,
			length : 51,
		),
		$client->messageEntitySpoiler(
			offset : 60,
			length : 32,
		),
		$client->messageEntityCustomEmoji(
			offset : 66,
			length : 49,
			document_id : -6141798977918840676,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 65,
			length : 84,
		),
	),
	min_age_confirm : 72,
);
```