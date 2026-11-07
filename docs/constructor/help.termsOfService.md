# help.termsOfService

**Description** : *Info about the latest telegram Terms Of Service*

**Layer** : 233

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
		data : 'RX5ydtC3GIJgYesH',
	),
	text : 'ObnzNoRy1A8eVMSl',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 43,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 28,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 17,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 88,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 40,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 62,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 58,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 73,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 28,
			language : 'RejLzCwYdQu5gF2c',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 25,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 94,
			user_id : 4524888815427911823,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 39,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 75,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 30,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 4,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 91,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 90,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 26,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 60,
			document_id : 2401963706569286841,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 32,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 40,
			date : 54,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 67,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 74,
			old_text : 'BjF0VOIStfh3bX4k',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 63,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 15,
		),
	),
	min_age_confirm : 42,
);
```