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
		data : 'vNBn7UIRwSEeKcdr',
	),
	text : 'Uy2Wxh0Pet8BiF1Z',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 69,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 11,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 46,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 13,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 85,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 83,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 23,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 19,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 90,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 34,
			language : 'Z27PN64Gi0reDapt',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 17,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 78,
			user_id : -603890963716614834,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 93,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 91,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 75,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 38,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 37,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 91,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 92,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 52,
			document_id : -3659932851182602653,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 46,
		),
	),
	min_age_confirm : 11,
);
```