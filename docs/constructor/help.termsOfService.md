# help.termsOfService

**Description** : *Info about the latest telegram Terms Of Service*

**Layer** : 229

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
		data : 'QSGX1eWDBnEpHM6k',
	),
	text : 'gntWMGDFESsfPyaz',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 13,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 15,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 68,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 25,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 39,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 97,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 39,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 80,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 74,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 0,
			language : '0HbkvZDVGJdSe1sf',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 54,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 6,
			user_id : -950439335334131960,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 98,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 91,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 52,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 44,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 94,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 45,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 92,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 15,
			document_id : -5497335189297936537,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 43,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 35,
			date : 10,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 93,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 8,
			old_text : '9J6Z5tqpEk43iObc',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 3,
		),
	),
	min_age_confirm : 67,
);
```