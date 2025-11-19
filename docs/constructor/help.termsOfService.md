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
		data : 'sEVTyhWADX9GNUwj',
	),
	text : '35kXWsDV9YnTvCPp',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 33,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 5,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 29,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 39,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 37,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 91,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 20,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 97,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 100,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 98,
			language : '0bCLizBKIqjfl2dD',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 54,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 53,
			user_id : -7418389140103883518,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 33,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 64,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 90,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 11,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 62,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 47,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 6,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 12,
			document_id : -103485810401558948,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 26,
		),
	),
	min_age_confirm : 98,
);
```