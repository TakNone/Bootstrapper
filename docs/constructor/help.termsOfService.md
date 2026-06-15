# help.termsOfService

**Description** : *Info about the latest telegram Terms Of Service*

**Layer** : 227

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
		data : 'M0zOcwfn9IKL2xUa',
	),
	text : 'Ltnb02qCwh4B9klz',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 37,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 28,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 24,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 26,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 60,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 83,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 46,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 30,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 45,
			language : '1jSufB7nHiQxqv58',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 0,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 99,
			user_id : 3490463501338745012,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 79,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 82,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 76,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 6,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 29,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 17,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 71,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 43,
			document_id : -6984025360665127467,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 19,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 78,
			date : 47,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 33,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 28,
			old_text : '8JFUIxVeW1ZvGNQE',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 45,
		),
	),
	min_age_confirm : 75,
);
```