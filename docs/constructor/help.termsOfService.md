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
		data : 'D9Eurvm4AtpciM1w',
	),
	text : 'iqFjbHTswr8WvVnz',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 34,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 90,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 99,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 30,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 8,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 44,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 42,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 99,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 77,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 17,
			language : 'q4OwK9YLW7uD8Rm2',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 44,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 84,
			user_id : -8236374431741645659,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 65,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 60,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 44,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 64,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 99,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 83,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 8,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 54,
			document_id : -3581548296567193384,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 12,
		),
	),
	min_age_confirm : 95,
);
```