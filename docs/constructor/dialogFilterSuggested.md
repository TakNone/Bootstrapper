# dialogFilterSuggested

**Description** : *Suggested folders*

**Layer** : 211

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
		id : 75,
		title : $client->textWithEntities(
			text : 'OQqxYnXG8eNU9IsM',
			entities : array(
				$client->messageEntityUnknown(...),
				$client->messageEntityMention(...),
				$client->messageEntityHashtag(...),
				$client->messageEntityBotCommand(...),
				$client->messageEntityUrl(...),
				$client->messageEntityEmail(...),
				$client->messageEntityBold(...),
				$client->messageEntityItalic(...),
				$client->messageEntityCode(...),
				$client->messageEntityPre(...),
				$client->messageEntityTextUrl(...),
				$client->messageEntityMentionName(...),
				$client->inputMessageEntityMentionName(...),
				$client->messageEntityPhone(...),
				$client->messageEntityCashtag(...),
				$client->messageEntityUnderline(...),
				$client->messageEntityStrike(...),
				$client->messageEntityBankCard(...),
				$client->messageEntitySpoiler(...),
				$client->messageEntityCustomEmoji(...),
				$client->messageEntityBlockquote(...),
			),
		),
		emoticon : '2dzqeyaJ0uvNVL48',
		color : 98,
		pinned_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -7481777752476722243,
			),
			$client->inputPeerUser(
				user_id : -4615027948454472345,
				access_hash : 8854896882163516875,
			),
			$client->inputPeerChannel(
				channel_id : -1310990776473245802,
				access_hash : 755732895428672706,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 29,
				user_id : 5437930954218834443,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 76,
				channel_id : 3282367662012904782,
			),
		),
		include_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -7542025854661431675,
			),
			$client->inputPeerUser(
				user_id : 809328284439248305,
				access_hash : -3905267679523430903,
			),
			$client->inputPeerChannel(
				channel_id : 3109274328552712025,
				access_hash : 3734984872235429416,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 100,
				user_id : 4999563811008949568,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 100,
				channel_id : 707621765832893528,
			),
		),
		exclude_peers : array(
			$client->inputPeerEmpty(),
			$client->inputPeerSelf(),
			$client->inputPeerChat(
				chat_id : -2302123226417735866,
			),
			$client->inputPeerUser(
				user_id : 5869860321850445298,
				access_hash : -588230003645101090,
			),
			$client->inputPeerChannel(
				channel_id : -6813676015030648611,
				access_hash : 5836587929419986002,
			),
			$client->inputPeerUserFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 78,
				user_id : 6936172317838482500,
			),
			$client->inputPeerChannelFromMessage(
				peer : $client->inputPeerEmpty(...),
				msg_id : 49,
				channel_id : -6213307195085548474,
			),
		),
	),
	description : 'qUXkIFPT0v9tJes6',
);
```