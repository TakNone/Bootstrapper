# stories.allStories

**Description** : *Full list of active \(or active and hidden\) stories*

**Layer** : 218

```tl
stories.allStories#6efc5e81 flags:# has_more:flags.0?true count:int state:string peer_stories:Vector<PeerStories> chats:Vector<Chat> users:Vector<User> stealth_mode:StoriesStealthMode = stories.AllStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **has_more** | [`flags.0?true`](type/true) | Whether more results can be fetched as described here » |
| <mark>count</mark> | [`int`](type/int) | Total number of active (or active and hidden) stories |
| <mark>state</mark> | [`string`](type/string) | State to use for pagination |
| <mark>peer_stories</mark> | [`Vector<PeerStories>`](type/PeerStories) | Stories |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| <mark>stealth_mode</mark> | [`StoriesStealthMode`](type/StoriesStealthMode) | Current stealth mode information |

---

## Type

[stories.AllStories](type/stories.AllStories)

---

## Example

```php
$storiesAllStories = $client->stories->allStories(
	has_more : true,
	count : 0,
	state : 'HXCyF5wdLrlMbJTa',
	peer_stories : array(
		$client->peerStories(
			peer : $client->peerUser(
				user_id : 6851886850413860901,
			),
			max_read_id : 56,
			stories : array(
				$client->storyItemDeleted(
					id : 77,
				),
				$client->storyItemSkipped(
					close_friends : true,
					live : true,
					id : 42,
					date : 95,
					expire_date : 63,
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
					id : 57,
					date : 85,
					from_id : $client->peerUser(
						user_id : 5266104781035791370,
					),
					fwd_from : $client->storyFwdHeader(
						modified : true,
						from : $client->peerUser(...),
						from_name : 'eKVMBgZDbhnYPkWC',
						story_id : 61,
					),
					expire_date : 70,
					caption : 'iubKSUCdPzLtRlX5',
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 49,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 71,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 100,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 20,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 47,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 55,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 4,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 21,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 89,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 77,
							language : 'kvJS5FLtxXc8eqPz',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 70,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 86,
							user_id : 8581092530065709494,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 33,
							user_id : $client->get_input_user(user : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 12,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 70,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 21,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 64,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 63,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 33,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 99,
							document_id : 2785968294551871846,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 72,
						),
					),
					media : $client->messageMediaEmpty(),
					media_areas : array(
						$client->mediaAreaVenue(
							coordinates : $client->mediaAreaCoordinates(...),
							geo : $client->geoPointEmpty(...),
							title : 'PmkgfA4KSDJUivoR',
							address : 'yTzmvKEnDMwBFV7p',
							provider : 'jviZN6LndlfyT0a7',
							venue_id : 'Ds0CKRAMxq4Yb183',
							venue_type : 'avUdbIOS6QgH5AkX',
						),
						$client->inputMediaAreaVenue(
							coordinates : $client->mediaAreaCoordinates(...),
							query_id : 3555763226078608279,
							result_id : 'uj5ANLxqXUpghlnG',
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
							channel_id : 5743283544717214156,
							msg_id : 74,
						),
						$client->inputMediaAreaChannelPost(
							coordinates : $client->mediaAreaCoordinates(...),
							channel : $client->get_input_channel(channel : '@LiveProto'),
							msg_id : 13,
						),
						$client->mediaAreaUrl(
							coordinates : $client->mediaAreaCoordinates(...),
							url : 'https://docs.liveproto.dev',
						),
						$client->mediaAreaWeather(
							coordinates : $client->mediaAreaCoordinates(...),
							emoji : 'EHIzefjW8c2BDSg1',
							temperature_c : -322063.5029296875,
							color : 76,
						),
						$client->mediaAreaStarGift(
							coordinates : $client->mediaAreaCoordinates(...),
							slug : '9YERWdbgmvJ5ZMoL',
						),
					),
					privacy : array(
						$client->privacyValueAllowContacts(),
						$client->privacyValueAllowAll(),
						$client->privacyValueAllowUsers(
							users : array(-5161931333418614341),
						),
						$client->privacyValueDisallowContacts(),
						$client->privacyValueDisallowAll(),
						$client->privacyValueDisallowUsers(
							users : array(441839820833166961),
						),
						$client->privacyValueAllowChatParticipants(
							chats : array(-6690388238643525141),
						),
						$client->privacyValueDisallowChatParticipants(
							chats : array(5300203111416057219),
						),
						$client->privacyValueAllowCloseFriends(),
						$client->privacyValueAllowPremium(),
						$client->privacyValueAllowBots(),
						$client->privacyValueDisallowBots(),
					),
					views : $client->storyViews(
						has_viewers : true,
						views_count : 69,
						forwards_count : 14,
						reactions : array(
							$client->reactionCount(...),
						),
						reactions_count : 64,
						recent_viewers : array(7523381758950616477),
					),
					sent_reaction : $client->reactionEmpty(),
					albums : array(23),
				),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -4951713230797159541,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 55004420018777228,
			title : 'sYXbDOUktwSfM8yT',
			photo : $client->chatPhotoEmpty(),
			participants_count : 3,
			date : 90,
			version : 77,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 20,
			),
		),
		$client->chatForbidden(
			id : 3560309242865837941,
			title : '2HEvcRug4i50wDJ3',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : -8708541419654630693,
			access_hash : -4918805647470665620,
			title : 'J0adjvBeYIcRk4qx',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'qdVQzGBNO2jro9sx',
					reason : '6HwsVjoNUJEk8Iq4',
					text : 'gRbaSuZQd4Hc0e7x',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 57,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 73,
			),
			participants_count : 93,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 94,
			),
			color : $client->peerColor(
				color : 81,
				background_emoji_id : 8759865851327390696,
			),
			profile_color : $client->peerColor(
				color : 95,
				background_emoji_id : 6863888374564462685,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 78,
			subscription_until_date : 96,
			bot_verification_icon : -6301118711995121149,
			send_paid_messages_stars : -9029433291749906352,
			linked_monoforum_id : 9210744006550995619,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 2511442124107220596,
			access_hash : 8341377579159434538,
			title : '4s8kgUxL9WMQyXo1',
			until_date : 85,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6198990069013398282,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : -7063939626707603182,
			access_hash : -264716684231515577,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 53,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '8EUQZbF562STJsrN',
					reason : 'eNPy7ZGfB4LjEvt5',
					text : '1jTaOUyte5XQAqD8',
				),
			),
			bot_inline_placeholder : 'RDTyYXkOVgMpZxFc',
			lang_code : 'Zb1XuKo0QGtWP4U3',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 22,
			),
			color : $client->peerColor(
				color : 66,
				background_emoji_id : 8073841527531036956,
			),
			profile_color : $client->peerColor(
				color : 12,
				background_emoji_id : 695689247977348664,
			),
			bot_active_users : 22,
			bot_verification_icon : -7876679968207374297,
			send_paid_messages_stars : 5964849438012878912,
		),
	),
	stealth_mode : $client->storiesStealthMode(
		active_until_date : 33,
		cooldown_until_date : 27,
	),
);
```