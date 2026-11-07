# help.deepLinkInfo

**Description** : *Deep link info, see the here for more details*

**Layer** : 233

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
	message : 'I1OLVA2uGzarU9Tn',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 99,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 5,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 61,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 5,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 58,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 19,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 67,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 70,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 85,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 85,
			language : 'mQ0NVUDj2yBaHOz8',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 72,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 72,
			user_id : -6903304397402858123,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 40,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 5,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 43,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 68,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 60,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 79,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 81,
			document_id : -4901331456047010923,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 9,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 80,
			date : 63,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 79,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 16,
			old_text : '8pdkVDNOzPsu0jWJ',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 81,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 22,
		),
	),
);
```