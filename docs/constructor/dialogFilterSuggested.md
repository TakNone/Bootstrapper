# dialogFilterSuggested

**Description** : *Suggested folders*

**Layer** : 222

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
		id : 39,
		title : $client->textWithEntities(
			text : '1AqXD5aG2OjExR9Z',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 18,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 71,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 95,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 10,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 6,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 94,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 26,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 85,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 70,
					language : 'N8BfGRJSq04asuMl',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 63,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 65,
					user_id : 6106687769091705466,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 61,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 91,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 33,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 70,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 50,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 46,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 100,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 84,
					document_id : -8603923617370989904,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 42,
				),
			),
		),
		emoticon : 'vL5hGNWFRoPz4VAD',
		color : 49,
		pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
	),
	description : '6uW8qeldoPfECM3Q',
);
```