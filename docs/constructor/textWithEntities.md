# textWithEntities

**Description** : *Styled text with message entities*

**Layer** : 225

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
	text : 'he3V5IQR1WZXa7tl',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 89,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 79,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 96,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 39,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 67,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 65,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 24,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 66,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 75,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 94,
			language : 'muyknQcsDAKSMPxV',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 69,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 69,
			user_id : -2935550615055983573,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 49,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 28,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 28,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 14,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 67,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 54,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 0,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 99,
			document_id : 161144912149955832,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 55,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 62,
			date : 10,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 97,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 58,
			old_text : 'f3v0rlR7GaHkJUh4',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 68,
		),
	),
);
```