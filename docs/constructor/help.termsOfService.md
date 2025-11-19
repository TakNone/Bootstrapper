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
		data : 'AL8j3fxU1m47Oilv',
	),
	text : 'KIzHY5c9CT0hNMUD',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 49,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 73,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 96,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 82,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 74,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 91,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 74,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 3,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 83,
			language : 'xebMr150SHKTZQ3i',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 7,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 40,
			user_id : -3260501151476368028,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 82,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 96,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 88,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 87,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 20,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 63,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 24,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 14,
			document_id : 6333719223798500972,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 43,
		),
	),
	min_age_confirm : 82,
);
```