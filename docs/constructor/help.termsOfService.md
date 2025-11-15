# help.termsOfService

**Description** : *Info about the latest telegram Terms Of Service*

**Layer** : 216

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
		data : 'axASGj9UBFtc5nmN',
	),
	text : '5HqhLP1w2enxU9ZJ',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 78,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 16,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 62,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 41,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 1,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 65,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 5,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 46,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 38,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 40,
			language : '4Fo7apG28OVuvfId',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 18,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 33,
			user_id : 1339553969903172380,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 20,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 0,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 64,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 33,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 55,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 77,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 23,
			document_id : 8178058901317820207,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 1,
		),
	),
	min_age_confirm : 85,
);
```