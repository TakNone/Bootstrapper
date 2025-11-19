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
	id : 100,
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
		id : 69,
		title : $client->textWithEntities(
			text : 'q1UDXkQc9TFPmgtL',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 64,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 6,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 13,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 14,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 40,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 24,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 100,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 71,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 83,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 14,
					language : '6ebKNfsjJGR4XvcI',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 83,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 67,
					user_id : -5274119542525644957,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 6,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 94,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 48,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 86,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 11,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 89,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 39,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 10,
					document_id : 1280526158598745013,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 40,
				),
			),
		),
		emoticon : 'HoJi6jSkCuhPDda9',
		color : 49,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```