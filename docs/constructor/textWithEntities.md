# textWithEntities

**Description** : *Styled text with message entities*

**Layer** : 233

```tl
textWithEntities#751f3146 text:string entities:Vector<MessageEntity> = TextWithEntities;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>text</mark> | [`string`](type/string) | Text |
| <mark>entities</mark> | [`Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |

---

## Type

[TextWithEntities](type/TextWithEntities)

---

## Example

```php
$textWithEntities = $client->textWithEntities(
	text : 'MD08WUjYPelHL56y',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 39,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 74,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 68,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 0,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 42,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 62,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 67,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 28,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 2,
			language : 'kcevmZXLqaQCF1zh',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 64,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 80,
			user_id : 7249529258330634649,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 30,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 22,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 89,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 7,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 99,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 31,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 49,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 5,
			document_id : -3376449635723736443,
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
			length : 71,
			date : 57,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 45,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 27,
			old_text : '9kxfmdWLS5laqK7N',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 90,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 43,
		),
	),
);
```