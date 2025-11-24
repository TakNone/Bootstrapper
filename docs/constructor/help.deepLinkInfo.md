# help.deepLinkInfo

**Description** : *Deep link info, see the here for more details*

**Layer** : 218

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
	message : 'JESR0fWB8AltGHvM',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 10,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 90,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 37,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 97,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 59,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 58,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 86,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 93,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 17,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 58,
			language : 'C1ANVxk2a4XblK3Q',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 26,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 14,
			user_id : 5048506472411029076,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 0,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 86,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 41,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 39,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 51,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 90,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 74,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 5,
			document_id : 6017176850403505060,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 27,
		),
	),
);
```