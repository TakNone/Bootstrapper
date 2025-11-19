# updateDialogFilter

**Description** : *A new folder was added*

**Layer** : 218

```tl
updateDialogFilter#26ffde7d flags:# id:int filter:flags.0?DialogFilter = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`int`](type/int) | Folder ID |
| **filter** | [`flags.0?DialogFilter`](type/DialogFilter) | Folder info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDialogFilter(
	id : 56,
	filter : $client->dialogFilter(
		contacts : true,
		non_contacts : true,
		groups : true,
		broadcasts : true,
		bots : true,
		exclude_muted : true,
		exclude_read : true,
		exclude_archived : true,
		title_noanimate : true,
		id : 29,
		title : $client->textWithEntities(
			text : 'Z7WPrSKq8ANdHvoX',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 66,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 10,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 50,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 22,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 14,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 53,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 34,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 8,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 57,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 78,
					language : '5LNdblfVgS2QucGr',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 20,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 7,
					user_id : 9029280222956997908,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 89,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 18,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 76,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 74,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 86,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 48,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 26,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 42,
					document_id : 6882143155903535707,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 92,
				),
			),
		),
		emoticon : 'uoJflKIEgWDjwZnV',
		color : 38,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```