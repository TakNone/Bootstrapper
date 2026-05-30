# stories.peerStories

**Description** : *Active story list of a specific peer*

**Layer** : 222

```tl
stories.peerStories#cae68768 stories:PeerStories chats:Vector<Chat> users:Vector<User> = stories.PeerStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stories</mark> | [`PeerStories`](type/PeerStories) | Stories |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[stories.PeerStories](type/stories.PeerStories)

---

## Example

```php
$storiesPeerStories = $client->stories->peerStories(
	stories : $client->peerStories(
		peer : $client->peerUser(
			user_id : -8620146561464501438,
		),
		max_read_id : 8,
		stories : array(
			$client->storyItemDeleted(
				id : 69,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 76,
				date : 43,
				expire_date : 74,
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
				id : 45,
				date : 23,
				from_id : $client->peerUser(
					user_id : -6898086573209272053,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'lKES3LsWdMuRbJI7',
					story_id : 62,
				),
				expire_date : 47,
				caption : 'Zu0tgm1DIacwJWNq',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 66,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 39,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 68,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 35,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 23,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 30,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 77,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 81,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 78,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 86,
						language : '6sikgWnTyA4wzbDr',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 99,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 57,
						user_id : 8650544485981616509,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 39,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 82,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 72,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 37,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 1,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 96,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 64,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 49,
						document_id : 7523788759364616555,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 30,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'cbaOfYR6BP5oh4sE',
						address : 'fQxLgcIEqumh346k',
						provider : '9SqTQ6A5sYEHhcRb',
						venue_id : 'pzgRO8cT3J2ntiWx',
						venue_type : 'PQ4G6CpLf2jWIoRa',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : 645246000613774397,
						result_id : 'MwbeOBYCGxNRXHra',
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
						channel_id : 2839996027533920775,
						msg_id : 76,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 37,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'EvBj9HwreU5CWPgA',
						temperature_c : 241768.4716796875,
						color : 33,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'QdNhbFT0anMDSkZf',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(-6912021409899702551),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(8548210047822514197),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(-1640851415701035793),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(-5620307876356205591),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 82,
					forwards_count : 77,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 93,
					recent_viewers : array(354437951045774234),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(71),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4100470163223771139,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2891798241717352664,
			title : 'CBl1tm2IHEve6gYO',
			photo : $client->chatPhotoEmpty(),
			participants_count : 98,
			date : 12,
			version : 4,
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
				until_date : 65,
			),
		),
		$client->chatForbidden(
			id : -8755303180770164020,
			title : 'jDpxgWVFGtfSwY3E',
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
			id : 5106052577627020032,
			access_hash : -4961820260179052620,
			title : 'RU82i1cHqoOxQm9E',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 92,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'HY8uIrtd1qXkmLE9',
					reason : 'yS4EZniPtJsxM8OV',
					text : 'CEiMPwxzJ4dKuBLc',
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
				until_date : 51,
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
				until_date : 100,
			),
			participants_count : 82,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 4,
			),
			color : $client->peerColor(
				color : 47,
				background_emoji_id : -4921581586169999220,
			),
			profile_color : $client->peerColor(
				color : 31,
				background_emoji_id : 1176191818288077627,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 40,
			subscription_until_date : 20,
			bot_verification_icon : 2808912381334659114,
			send_paid_messages_stars : 8069172399134911794,
			linked_monoforum_id : -2156913230263245038,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -8679109686198747925,
			access_hash : 7906918949981618419,
			title : '7LmEIc1TPXwMBWCa',
			until_date : 19,
		),
	),
	users : array(
		$client->userEmpty(
			id : 6106105376863082200,
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
			bot_forum_can_manage_topics : true,
			id : 3670735460935859313,
			access_hash : -2334344383329351423,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 54,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5zaURK8Xh9VFOHkB',
					reason : 'kDFBK0tWMPHIUXAL',
					text : '9Z4SDn1sNrv8z6Ja',
				),
			),
			bot_inline_placeholder : '52XhorLHCRO6iUkd',
			lang_code : '31yRKW0imD7UbCIN',
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
				max_id : 69,
			),
			color : $client->peerColor(
				color : 32,
				background_emoji_id : -4995780726448212090,
			),
			profile_color : $client->peerColor(
				color : 54,
				background_emoji_id : 6100512386245650757,
			),
			bot_active_users : 58,
			bot_verification_icon : -4415895474660343287,
			send_paid_messages_stars : 3839847507841771317,
		),
	),
);
```