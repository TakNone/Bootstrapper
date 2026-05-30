# help.deepLinkInfo

**Description** : *Deep link info, see the here for more details*

**Layer** : 225

```tl
help.deepLinkInfo#6a4ee832 flags:# update_app:flags.0?true message:string entities:flags.1?Vector<MessageEntity> = help.DeepLinkInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **update_app** | [`flags.0?true`](type/true) | An update of the app is required to parse this link |
| <mark>message</mark> | [`string`](type/string) | Message to show to the user |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |

---

## Type

[help.DeepLinkInfo](type/help.DeepLinkInfo)

---

## Example

```php
$helpDeepLinkInfo = $client->help->deepLinkInfo(
	update_app : true,
	message : 'Thtzl7rKe2ZnqOI9',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 66,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 20,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 13,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 32,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 55,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 11,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 76,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 65,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 33,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 66,
			language : 'IBXa4lqkvcF19sKT',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 100,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 52,
			user_id : 8139644899541232246,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 59,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 74,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 8,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 79,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 60,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 12,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 86,
			document_id : -8662726332697992991,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 30,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 56,
			date : 89,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 22,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 88,
			old_text : '41lsUjvktBGeNXar',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 21,
		),
	),
);
```