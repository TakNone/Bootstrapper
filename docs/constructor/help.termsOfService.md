# help.termsOfService

**Description** : *Info about the latest telegram Terms Of Service*

**Layer** : 222

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
		data : 'YEnzMKgRfdejxw92',
	),
	text : 'S0jXIc6eYZLVA7UJ',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 80,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 56,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 56,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 82,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 14,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 41,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 96,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 6,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 1,
			language : 'F6WYnuTK1xmDj5wh',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 77,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 62,
			user_id : 6041706649567077502,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 17,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 66,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 94,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 2,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 24,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 63,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 27,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 36,
			document_id : -457584893535755319,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 25,
		),
	),
	min_age_confirm : 18,
);
```