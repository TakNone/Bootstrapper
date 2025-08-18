# help.deepLinkInfo

**Description** : *Deep link info, see the here for more details*

**Layer** : 211

```tl
help.deepLinkInfo#6a4ee832 flags:# update_app:flags.0?true message:string entities:flags.1?Vector<MessageEntity> = help.DeepLinkInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	message : 'byKRIpzgP0Hi9h4o',
	entities : array(
		$client->messageEntityUnknown(
			offset : 93,
			length : 84,
		),
		$client->messageEntityMention(
			offset : 60,
			length : 39,
		),
		$client->messageEntityHashtag(
			offset : 45,
			length : 66,
		),
		$client->messageEntityBotCommand(
			offset : 71,
			length : 55,
		),
		$client->messageEntityUrl(
			offset : 11,
			length : 19,
		),
		$client->messageEntityEmail(
			offset : 77,
			length : 23,
		),
		$client->messageEntityBold(
			offset : 45,
			length : 28,
		),
		$client->messageEntityItalic(
			offset : 7,
			length : 2,
		),
		$client->messageEntityCode(
			offset : 68,
			length : 23,
		),
		$client->messageEntityPre(
			offset : 92,
			length : 43,
			language : 'RK614rPiQWsOH5vb',
		),
		$client->messageEntityTextUrl(
			offset : 89,
			length : 77,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 44,
			length : 54,
			user_id : -2932432006036617571,
		),
		$client->inputMessageEntityMentionName(
			offset : 92,
			length : 32,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 30,
			length : 52,
		),
		$client->messageEntityCashtag(
			offset : 23,
			length : 96,
		),
		$client->messageEntityUnderline(
			offset : 43,
			length : 27,
		),
		$client->messageEntityStrike(
			offset : 55,
			length : 95,
		),
		$client->messageEntityBankCard(
			offset : 91,
			length : 1,
		),
		$client->messageEntitySpoiler(
			offset : 22,
			length : 39,
		),
		$client->messageEntityCustomEmoji(
			offset : 68,
			length : 13,
			document_id : -3894603850864406483,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 0,
		),
	),
);
```