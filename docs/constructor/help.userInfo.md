# help.userInfo

**Description** : *Internal use*

**Layer** : 211

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
	message : '6osFOvUk82hBxPnG',
	entities : array(
		$client->messageEntityUnknown(
			offset : 52,
			length : 65,
		),
		$client->messageEntityMention(
			offset : 63,
			length : 61,
		),
		$client->messageEntityHashtag(
			offset : 18,
			length : 68,
		),
		$client->messageEntityBotCommand(
			offset : 68,
			length : 6,
		),
		$client->messageEntityUrl(
			offset : 40,
			length : 62,
		),
		$client->messageEntityEmail(
			offset : 17,
			length : 42,
		),
		$client->messageEntityBold(
			offset : 38,
			length : 39,
		),
		$client->messageEntityItalic(
			offset : 26,
			length : 53,
		),
		$client->messageEntityCode(
			offset : 80,
			length : 23,
		),
		$client->messageEntityPre(
			offset : 44,
			length : 2,
			language : 'E3jhc0M52evUg6LN',
		),
		$client->messageEntityTextUrl(
			offset : 8,
			length : 82,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 97,
			length : 37,
			user_id : 486999111180471994,
		),
		$client->inputMessageEntityMentionName(
			offset : 69,
			length : 37,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 92,
			length : 17,
		),
		$client->messageEntityCashtag(
			offset : 83,
			length : 76,
		),
		$client->messageEntityUnderline(
			offset : 25,
			length : 49,
		),
		$client->messageEntityStrike(
			offset : 62,
			length : 3,
		),
		$client->messageEntityBankCard(
			offset : 20,
			length : 61,
		),
		$client->messageEntitySpoiler(
			offset : 8,
			length : 12,
		),
		$client->messageEntityCustomEmoji(
			offset : 19,
			length : 68,
			document_id : -2067784964314627273,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 21,
			length : 80,
		),
	),
	author : 'coFqi5hTBjRnX3WM',
	date : 9,
);
```