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
	id : 34,
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
		id : 53,
		title : $client->textWithEntities(
			text : 'MNEAVYv05C8BPabs',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 74,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 36,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 49,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 61,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 97,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 85,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 31,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 64,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 36,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 54,
					language : '9VfonheCjPzcBdTr',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 28,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 73,
					user_id : 1412997754351398867,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 97,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 54,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 82,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 93,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 85,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 90,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 95,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 64,
					document_id : 3687331872155173126,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 46,
				),
			),
		),
		emoticon : 'wqUvnVhmXZxKNIcT',
		color : 78,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
);
```