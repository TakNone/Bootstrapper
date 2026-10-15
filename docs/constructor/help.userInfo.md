# help.userInfo

**Description** : *Internal use*

**Layer** : 229

```tl
help.userInfo#1eb3758 message:string entities:Vector<MessageEntity> author:string date:int = help.UserInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`string`](type/string) | Info |
| <mark>entities</mark> | [`Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| <mark>author</mark> | [`string`](type/string) | Author |
| <mark>date</mark> | [`int`](type/int) | Date |

---

## Type

[help.UserInfo](type/help.UserInfo)

---

## Example

```php
$helpUserInfo = $client->help->userInfo(
	message : 'MSRlWrQfI1OT7FqC',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 63,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 37,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 5,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 80,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 39,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 66,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 61,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 51,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 1,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 48,
			language : 'j9YDEaeCtrwiVkso',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 45,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 98,
			user_id : 6416803913047376143,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 12,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 1,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 73,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 67,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 54,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 69,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 49,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 14,
			document_id : 8673654370792525303,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 33,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 51,
			date : 98,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 93,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 72,
			old_text : 'PJyWQ2Cg39e7KxBI',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 61,
		),
	),
	author : 'e8dFwmSXJOCQP4Vt',
	date : 57,
);
```