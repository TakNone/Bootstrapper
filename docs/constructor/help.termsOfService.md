# help.termsOfService

**Description** : *Info about the latest telegram Terms Of Service*

**Layer** : 225

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
		data : 'YgQ51CpiwFhI8N6d',
	),
	text : 'NJHkAUu21cBnvtIj',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 26,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 88,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 8,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 39,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 46,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 20,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 34,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 13,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 23,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 40,
			language : 'apFe7OAoU9RIS4GE',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 24,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 100,
			user_id : 3170211105341285190,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 73,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 0,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 84,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 93,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 66,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 87,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 6,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 96,
			document_id : -6776726645278330821,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 82,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 97,
			date : 22,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 49,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 75,
			old_text : 'j4sRDmgcHF8aVIJq',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 54,
		),
	),
	min_age_confirm : 16,
);
```