# help.deepLinkInfo

**Description** : *Deep link info, see the here for more details*

**Layer** : 214

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
	message : 'ci69DjyBdPlCvhto',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 12,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 19,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 17,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 59,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 50,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 17,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 13,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 88,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 45,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 1,
			language : '9QL3Es6mrdRVMCYc',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 39,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 10,
			user_id : 2531802005206536111,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 55,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 67,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 34,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 97,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 48,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 74,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 13,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 8,
			document_id : -2890333360134280907,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 20,
		),
	),
);
```