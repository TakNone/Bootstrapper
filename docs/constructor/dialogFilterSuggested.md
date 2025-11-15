# dialogFilterSuggested

**Description** : *Suggested folders*

**Layer** : 218

```tl
dialogFilterSuggested#77744d4a filter:DialogFilter description:string = DialogFilterSuggested;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>filter</mark> | [`DialogFilter`](type/DialogFilter) | Folder info |
| <mark>description</mark> | [`string`](type/string) | Folder description |

---

## Type

[DialogFilterSuggested](type/DialogFilterSuggested)

---

## Example

```php
$dialogFilterSuggested = $client->dialogFilterSuggested(
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
		id : 10,
		title : $client->textWithEntities(
			text : 'Kb1koLHRijVg3MZT',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 14,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 65,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 81,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 23,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 79,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 19,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 100,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 60,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 90,
					language : 'O15xwXEYFyptjZkS',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 31,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 38,
					user_id : -2374559222520253241,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 16,
					user_id : $client->get_input_user(peer : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 8,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 74,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 18,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 2,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 32,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 2,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 37,
					document_id : -4008150405984685156,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 42,
				),
			),
		),
		emoticon : 'JmLaBXi1MxqokKyw',
		color : 52,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	description : 'LIYgMsXwbT95hD3C',
);
```