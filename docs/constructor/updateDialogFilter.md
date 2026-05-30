# updateDialogFilter

**Description** : *A new folder was added*

**Layer** : 222

```tl
updateDialogFilter#26ffde7d flags:# id:int filter:flags.0?DialogFilter = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`int`](type/int) | Folder ID |
| **filter** | [`flags.0?DialogFilter`](type/DialogFilter) | Folder info |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDialogFilter(
	id : 77,
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
		id : 7,
		title : $client->textWithEntities(
			text : 'B6djf0S9GDEqYP4U',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 58,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 21,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 78,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 78,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 60,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 2,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 88,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 60,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 89,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 29,
					language : 'qNMy17Ljpl3KEoxv',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 5,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 84,
					user_id : 2227973298057349275,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 94,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 63,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 59,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 53,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 17,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 52,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 48,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 61,
					document_id : 1387253433963206129,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 7,
				),
			),
		),
		emoticon : 'AG0F82vVSNTcHMfD',
		color : 39,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```