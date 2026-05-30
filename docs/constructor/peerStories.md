# peerStories

**Description** : *Stories associated to a peer*

**Layer** : 222

```tl
peerStories#9a35e999 flags:# peer:Peer max_read_id:flags.0?int stories:Vector<StoryItem> = PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		user_id : -1421424444001559230,
	),
	max_read_id : 68,
	stories : array(
		$client->storyItemDeleted(
			id : 18,
		),
		$client->storyItemSkipped(
			close_friends : true,
			live : true,
			id : 12,
			date : 58,
			expire_date : 48,
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
			id : 86,
			date : 89,
			from_id : $client->peerUser(
				user_id : 3048621166439980972,
			),
			fwd_from : $client->storyFwdHeader(
				modified : true,
				from : $client->peerUser(
					user_id : -5826698266086250663,
				),
				from_name : '3gR2U1krV5YwFPBO',
				story_id : 13,
			),
			expire_date : 19,
			caption : 'vdctyaiMOXkKSCuq',
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 25,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 1,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 74,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 49,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 19,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 16,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 18,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 28,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 48,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 80,
					language : 'rC29YgVKB6Lfpob4',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 32,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 80,
					user_id : 6263668068309667267,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 2,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 12,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 58,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 90,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 73,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 91,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 38,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 52,
					document_id : 5166979081859320087,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 55,
				),
			),
			media : $client->messageMediaEmpty(),
			media_areas : array(
				$client->mediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : 956954.8857421875,
						y : 982726.2734375,
						w : 52754.7529296875,
						h : 1614521.0703125,
						rotation : 730820.8876953125,
						radius : 979223.2490234375,
					),
					geo : $client->geoPointEmpty(),
					title : 'fkKyFlIGuV8awPq7',
					address : 'aDns2i84IfuEJ3BV',
					provider : 'plwF4WIXE6N2sbeM',
					venue_id : '8PfRUWlAMVe0mkHv',
					venue_type : 'ZkhaG2JmOxB4qtpy',
				),
				$client->inputMediaAreaVenue(
					coordinates : $client->mediaAreaCoordinates(
						x : 1288581.1943359375,
						y : 1720109.845703125,
						w : -383852.6181640625,
						h : 1471918.2578125,
						rotation : 1335227.8779296875,
						radius : 2002191.1552734375,
					),
					query_id : -2301013137696407644,
					result_id : 'Fyh0oY8R6wMpSqxZ',
				),
				$client->mediaAreaGeoPoint(
					coordinates : $client->mediaAreaCoordinates(
						x : -280707.04296875,
						y : -596197.8173828125,
						w : 890316.443359375,
						h : -276635.4609375,
						rotation : -123620.0615234375,
						radius : 1766596.7099609375,
					),
					geo : $client->geoPointEmpty(),
					address : $client->geoPointAddress(
						country_iso2 : 'DA5Ke4li07SwNU92',
						state : 'bJIN9UPazxDsEkfW',
						city : 'xuQDqshjMgZao2lz',
						street : 'AIGz7ZrQaeXfNsn4',
					),
				),
				$client->mediaAreaSuggestedReaction(
					dark : true,
					flipped : true,
					coordinates : $client->mediaAreaCoordinates(
						x : 814665.4345703125,
						y : -1811828.98046875,
						w : 2076186.8232421875,
						h : 838990.9912109375,
						rotation : 1329919.5634765625,
						radius : -1725437.404296875,
					),
					reaction : $client->reactionEmpty(),
				),
				$client->mediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 1299954.017578125,
						y : 1586446.283203125,
						w : 2053999.3408203125,
						h : 48590.068359375,
						rotation : 329032.166015625,
						radius : -1599887.853515625,
					),
					channel_id : 4063905152544479258,
					msg_id : 2,
				),
				$client->inputMediaAreaChannelPost(
					coordinates : $client->mediaAreaCoordinates(
						x : 1392508.2978515625,
						y : 1260743.798828125,
						w : -335853.955078125,
						h : 299993.138671875,
						rotation : 1233521.427734375,
						radius : -1474364.4453125,
					),
					channel : $client->get_input_channel(channel : '@LiveProto'),
					msg_id : 13,
				),
				$client->mediaAreaUrl(
					coordinates : $client->mediaAreaCoordinates(
						x : -1686767.26953125,
						y : 1182760.7021484375,
						w : 812681.001953125,
						h : 1006934.40234375,
						rotation : -1518342.4794921875,
						radius : 932484.748046875,
					),
					url : 'https://docs.liveproto.dev',
				),
				$client->mediaAreaWeather(
					coordinates : $client->mediaAreaCoordinates(
						x : 1365830.3720703125,
						y : 312286.328125,
						w : -549062.646484375,
						h : -1474935.310546875,
						rotation : 362124.15625,
						radius : -620708.1064453125,
					),
					emoji : 'WzBQmgrDFE965Avw',
					temperature_c : 1108047.0712890625,
					color : 70,
				),
				$client->mediaAreaStarGift(
					coordinates : $client->mediaAreaCoordinates(
						x : -601639.515625,
						y : -1129231.8544921875,
						w : 590286.4541015625,
						h : -186741.1318359375,
						rotation : -304182.580078125,
						radius : 1987672.9560546875,
					),
					slug : 'mFRVXTfkD1oO54vP',
				),
			),
			privacy : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-4558795584185485478),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(4062969240282592478),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-8756947696211979097),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-2596066028915013600),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
			views : $client->storyViews(
				has_viewers : true,
				views_count : 9,
				forwards_count : 39,
				reactions : array(
					$client->reactionCount(
						chosen_order : 85,
						reaction : $client->reactionEmpty(...),
						count : 8,
					),
				),
				reactions_count : 61,
				recent_viewers : array(2319947472567350251),
			),
			sent_reaction : $client->reactionEmpty(),
			albums : array(55),
		),
	),
);
```