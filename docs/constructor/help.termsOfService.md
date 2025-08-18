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
		data : 'U8fmt29uI3yCKcpQ',
	),
	text : 'a4Wpvf1h7HjqeGKc',
	entities : array(
		$client->messageEntityUnknown(
			offset : 18,
			length : 96,
		),
		$client->messageEntityMention(
			offset : 28,
			length : 37,
		),
		$client->messageEntityHashtag(
			offset : 36,
			length : 40,
		),
		$client->messageEntityBotCommand(
			offset : 58,
			length : 52,
		),
		$client->messageEntityUrl(
			offset : 2,
			length : 64,
		),
		$client->messageEntityEmail(
			offset : 58,
			length : 97,
		),
		$client->messageEntityBold(
			offset : 74,
			length : 22,
		),
		$client->messageEntityItalic(
			offset : 90,
			length : 20,
		),
		$client->messageEntityCode(
			offset : 96,
			length : 80,
		),
		$client->messageEntityPre(
			offset : 15,
			length : 77,
			language : '04EtPSvjifWDuMLd',
		),
		$client->messageEntityTextUrl(
			offset : 20,
			length : 6,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 99,
			length : 9,
			user_id : -637863773492107706,
		),
		$client->inputMessageEntityMentionName(
			offset : 27,
			length : 14,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 84,
			length : 35,
		),
		$client->messageEntityCashtag(
			offset : 81,
			length : 8,
		),
		$client->messageEntityUnderline(
			offset : 71,
			length : 85,
		),
		$client->messageEntityStrike(
			offset : 46,
			length : 76,
		),
		$client->messageEntityBankCard(
			offset : 31,
			length : 13,
		),
		$client->messageEntitySpoiler(
			offset : 13,
			length : 12,
		),
		$client->messageEntityCustomEmoji(
			offset : 82,
			length : 59,
			document_id : -3330102240510783329,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 50,
			length : 43,
		),
	),
	min_age_confirm : 14,
);
```