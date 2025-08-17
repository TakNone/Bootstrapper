# help.termsOfService

**Description** : *Info about the latest telegram Terms Of Service*

**Layer** : 211

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
		data : '7Zq3Ce6pFyoJtash',
	),
	text : 'WzjAcLkHPZxfiXoG',
	entities : array(
		$client->messageEntityUnknown(
			offset : 83,
			length : 88,
		),
		$client->messageEntityMention(
			offset : 27,
			length : 4,
		),
		$client->messageEntityHashtag(
			offset : 58,
			length : 31,
		),
		$client->messageEntityBotCommand(
			offset : 94,
			length : 16,
		),
		$client->messageEntityUrl(
			offset : 94,
			length : 74,
		),
		$client->messageEntityEmail(
			offset : 28,
			length : 62,
		),
		$client->messageEntityBold(
			offset : 8,
			length : 63,
		),
		$client->messageEntityItalic(
			offset : 72,
			length : 60,
		),
		$client->messageEntityCode(
			offset : 40,
			length : 66,
		),
		$client->messageEntityPre(
			offset : 84,
			length : 58,
			language : 'tiKvd6A1scrbROUM',
		),
		$client->messageEntityTextUrl(
			offset : 20,
			length : 2,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 40,
			length : 40,
			user_id : 3809160256216912401,
		),
		$client->inputMessageEntityMentionName(
			offset : 87,
			length : 41,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 85,
			length : 81,
		),
		$client->messageEntityCashtag(
			offset : 23,
			length : 12,
		),
		$client->messageEntityUnderline(
			offset : 9,
			length : 6,
		),
		$client->messageEntityStrike(
			offset : 79,
			length : 15,
		),
		$client->messageEntityBankCard(
			offset : 84,
			length : 43,
		),
		$client->messageEntitySpoiler(
			offset : 87,
			length : 91,
		),
		$client->messageEntityCustomEmoji(
			offset : 26,
			length : 13,
			document_id : 9124728931084589945,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 68,
			length : 93,
		),
	),
	min_age_confirm : 81,
);
```