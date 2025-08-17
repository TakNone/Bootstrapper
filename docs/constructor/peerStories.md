# peerStories

**Description** : *Stories associated to a peer*

**Layer** : 211

```tl
peerStories#9a35e999 flags:# peer:Peer max_read_id:flags.0?int stories:Vector<StoryItem> = PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer |
| **max_read_id** | [`flags.0?int`](type/int) | If set, contains the ID of the maximum read story |
| <mark>stories</mark> | [`Vector<StoryItem>`](type/StoryItem) | Stories |

---

## Type

[PeerStories](type/PeerStories)

---

## Example

```php
$peerStories = $client->peerStories(
	peer : $client->peerUser(
		user_id : -5374993504528465287,
	),
	max_read_id : 53,
	stories : array(
		$client->storyItemDeleted(
			id : 95,
		),
		$client->storyItemSkipped(
			close_friends : true,
			id : 57,
			date : 37,
			expire_date : 88,
		),
		$client->storyItem(
			pinned : true,
			public : true,
			close_friends : true,
			min : true,
			noforwards : true,
			edited : true,
			contacts : true,
			selected_contacts : true,
			out : true,
			id : 27,
			date : 46,
			from_id : $client->peerUser(
				user_id : 8489805508600794407,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(...),
				from_name : '0wn7cIJMxoP43Brq',
				story_id : 13,
			),
			expire_date : 5,
			caption : 'ITZ9Kq0zrQMdEXNj',
			entities : array(
				$client->messageEntityUnknown(
					offset : 48,
					length : 22,
				),
				$client->messageEntityMention(
					offset : 74,
					length : 25,
				),
				$client->messageEntityHashtag(
					offset : 79,
					length : 19,
				),
				$client->messageEntityBotCommand(
					offset : 37,
					length : 87,
				),
				$client->messageEntityUrl(
					offset : 46,
					length : 81,
				),
				$client->messageEntityEmail(
					offset : 8,
					length : 73,
				),
				$client->messageEntityBold(
					offset : 38,
					length : 97,
				),
				$client->messageEntityItalic(
					offset : 20,
					length : 31,
				),
				$client->messageEntityCode(
					offset : 74,
					length : 86,
				),
				$client->messageEntityPre(
					offset : 17,
					length : 82,
					language : 'v14mHApG8OniqKks',
				),
				$client->messageEntityTextUrl(
					offset : 61,
					length : 26,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 30,
					length : 78,
					user_id : -2621972167341206452,
				),
				$client->inputMessageEntityMentionName(
					offset : 22,
					length : 72,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 36,
					length : 80,
				),
				$client->messageEntityCashtag(
					offset : 56,
					length : 4,
				),
				$client->messageEntityUnderline(
					offset : 15,
					length : 68,
				),
				$client->messageEntityStrike(
					offset : 82,
					length : 12,
				),
				$client->messageEntityBankCard(
					offset : 31,
					length : 79,
				),
				$client->messageEntitySpoiler(
					offset : 5,
					length : 65,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 91,
					document_id : -2129250577819793976,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 13,
					length : 59,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					title : 'KDHfWOGYP3a2khMc',
					address : 'CfXdJ6FzWMGLq3lI',
					provider : 'XTdMxoFrVlvc60KN',
					venue_id : 'EwBTP9xn7ru6sG0v',
					venue_type : 'mZqvE0ROndW1PwIk',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					query_id : 3308373091922414322,
					result_id : 'ZLoVl0b7cN4kt3JA',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					address : $client->geoPointAddress(...),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(...),
					reaction : $client->reactionEmpty(...),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel_id : 9160654343802982106,
					msg_id : 39,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel : $client->inputChannelEmpty(...),
					msg_id : 76,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(...),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(...),
					emoji : 'E3sf8medY2b5DMUA',
					temperature_c : 1429679.6787109375,
					color : 98,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(...),
					slug : 'sB2WX5U31KPgzZG4',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-144876685125819707),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(9213265272181114140),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(4256417768268182424),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(1644619975292824873),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 38,
				forwards_count : 50,
				reactions : array(
					$client->reactionCount(...),
				),
				reactions_count : 20,
				recent_viewers : array(4739256354571275369),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(16),
		),
	),
);
```