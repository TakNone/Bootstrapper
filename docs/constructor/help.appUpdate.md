# help.appUpdate

**Description** : *An update is available for the application*

**Layer** : 216

```tl
help.appUpdate#ccbbce30 flags:# can_not_skip:flags.0?true id:int version:string text:string entities:Vector<MessageEntity> document:flags.1?Document url:flags.2?string sticker:flags.3?Document = help.AppUpdate;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_not_skip** | [`flags.0?true`](type/true) | Unskippable, the new info must be shown to the user (with a popup or something else) |
| <mark>id</mark> | [`int`](type/int) | Update ID |
| <mark>version</mark> | [`string`](type/string) | New version name |
| <mark>text</mark> | [`string`](type/string) | Text description of the update |
| <mark>entities</mark> | [`Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **document** | [`flags.1?Document`](type/Document) | Application binary |
| **url** | [`flags.2?string`](type/string) | Application download URL |
| **sticker** | [`flags.3?Document`](type/Document) | Associated sticker |

---

## Type

[help.AppUpdate](type/help.AppUpdate)

---

## Example

```php
$helpAppUpdate = $client->help->appUpdate(
	can_not_skip : true,
	id : 26,
	version : 'HcqRw5ld2fYkBTmG',
	text : 'FKAopDgXzcdvJC8Y',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 25,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 15,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 11,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 35,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 39,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 43,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 28,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 74,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 64,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 18,
			language : 'mNtIQFCecLdvlwaM',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 76,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 74,
			user_id : -2123381188275688986,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 14,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 22,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 71,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 86,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 40,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 41,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 25,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 79,
			document_id : 1543399482394613640,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 43,
		),
	),
	document : $client->documentEmpty(
		id : 4534233375635095128,
	),
	url : 'https://docs.liveproto.dev',
	sticker : $client->documentEmpty(
		id : 8187522229534090427,
	),
);
```