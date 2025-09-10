# help.userInfo

**Description** : *Internal use*

**Layer** : 214

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
	message : 'rEacDypqt4LjYbAk',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 61,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 24,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 17,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 89,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 56,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 25,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 80,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 85,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 95,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 63,
			language : '34GwUKkg5NxR7Ycp',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 70,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 79,
			user_id : -59966983556471636,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 34,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 83,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 1,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 41,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 15,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 88,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 77,
			document_id : 4045870302560053047,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 3,
		),
	),
	author : 'Olp3KxksbTvz9u0F',
	date : 74,
);
```