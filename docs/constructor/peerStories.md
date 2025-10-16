# peerStories

**Description** : *Stories associated to a peer*

**Layer** : 216

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
		user_id : 2488030990064711192,
	),
	max_read_id : 68,
	stories : array(
		$client->storyItemDeleted(
			id : 79,
		),
		$client->storyItemSkipped(
			close_friends : true,
			id : 95,
			date : 100,
			expire_date : 13,
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
			id : 16,
			date : 30,
			from_id : $client->peerUser(
				user_id : 6658263195378061732,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(...),
				from_name : 'iIGfhd3y5bWZUMAo',
				story_id : 8,
			),
			expire_date : 23,
			caption : 'oHme6L2tXi8NyMlK',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 18,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 78,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 72,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 17,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 97,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 79,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 14,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 67,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 41,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 7,
					language : 'KV2tjZrp3BQYXyIS',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 81,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 14,
					user_id : 6340081611521157979,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 30,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 92,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 81,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 6,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 54,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 20,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 75,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 78,
					document_id : 8179075150468675981,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 59,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					geo : $client->geoPointEmpty(...),
					title : 'Jk5gUhGRje4yTE9z',
					address : 'mv2SXDGHWc3rlOZP',
					provider : 'D5h3pe1joVwu4AHG',
					venue_id : '3pE5rud067NZwPVh',
					venue_type : 'g2v3EbdzZpwOxSNM',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(...),
					query_id : -6898736166417049805,
					result_id : '7pwJzIxQDTkKeAVa',
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
					channel_id : 3725706140494277709,
					msg_id : 56,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(...),
					channel : $client->inputChannelEmpty(...),
					msg_id : 57,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(...),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(...),
					emoji : 'OpFNTsGeRzniZoQr',
					temperature_c : 1762046.169921875,
					color : 31,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(...),
					slug : 'ut1Xjo6WBV7pR0xG',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-434483425775386489),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(2693970463323234306),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(6395634445201172368),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(921897336617171540),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 68,
				forwards_count : 99,
				reactions : array(
					$client->reactionCount(...),
				),
				reactions_count : 84,
				recent_viewers : array(6190352577430402783),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(27),
		),
	),
);
```