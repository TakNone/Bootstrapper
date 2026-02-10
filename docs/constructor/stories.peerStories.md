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
			user_id : -4434669618654058791,
		),
		max_read_id : 12,
		stories : array(
			$client->storyItemDeleted(
				id : 59,
			),
			$client->storyItemSkipped(
				close_friends : true,
				live : true,
				id : 31,
				date : 64,
				expire_date : 59,
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
				id : 23,
				date : 8,
				from_id : $client->peerUser(
					user_id : 8501485953059125179,
				),
				fwd_from : $client->storyFwdHeader(
					modified : true,
					from : $client->peerUser(...),
					from_name : 'EcRveb7hFfrqj3kN',
					story_id : 34,
				),
				expire_date : 9,
				caption : 'pEdfOer0X2gNwUTS',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 31,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 27,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 82,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 93,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 93,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 90,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 76,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 74,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 15,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 60,
						language : 'vzupT0E4C2daxAgl',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 92,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 1,
						user_id : 1327870471390015071,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 53,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 75,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 68,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 100,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 6,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 40,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 13,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 32,
						document_id : 4995553711752024778,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 36,
					),
				),
				media : $client->messageMediaEmpty(),
				media_areas : array(
					$client->mediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						geo : $client->geoPointEmpty(...),
						title : 'e0JFZRsMN9KpUTG5',
						address : 'vzLoRyIVF53NXB1D',
						provider : 'tJ245ds6CnTcilm0',
						venue_id : 'QhzNEBxjRK0X6P2i',
						venue_type : '8eYq7AGa6RCEWLDt',
					),
					$client->inputMediaAreaVenue(
						coordinates : $client->mediaAreaCoordinates(...),
						query_id : 8665255387534286168,
						result_id : 'LICRDEa7zmJPQcUH',
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
						channel_id : 9218861866011487419,
						msg_id : 60,
					),
					$client->inputMediaAreaChannelPost(
						coordinates : $client->mediaAreaCoordinates(...),
						channel : $client->get_input_channel(channel : '@LiveProto'),
						msg_id : 44,
					),
					$client->mediaAreaUrl(
						coordinates : $client->mediaAreaCoordinates(...),
						url : 'https://docs.liveproto.dev',
					),
					$client->mediaAreaWeather(
						coordinates : $client->mediaAreaCoordinates(...),
						emoji : 'yZ6O7xYRTepfHXmr',
						temperature_c : -487539.36328125,
						color : 40,
					),
					$client->mediaAreaStarGift(
						coordinates : $client->mediaAreaCoordinates(...),
						slug : 'z34YZM6XpkJvl1RC',
					),
				),
				privacy : array(
					$client->privacyValueAllowContacts(),
					$client->privacyValueAllowAll(),
					$client->privacyValueAllowUsers(
						users : array(-7884147375500190681),
					),
					$client->privacyValueDisallowContacts(),
					$client->privacyValueDisallowAll(),
					$client->privacyValueDisallowUsers(
						users : array(-6031821777157365526),
					),
					$client->privacyValueAllowChatParticipants(
						chats : array(-2197565558654948274),
					),
					$client->privacyValueDisallowChatParticipants(
						chats : array(486527469064984412),
					),
					$client->privacyValueAllowCloseFriends(),
					$client->privacyValueAllowPremium(),
					$client->privacyValueAllowBots(),
					$client->privacyValueDisallowBots(),
				),
				views : $client->storyViews(
					has_viewers : true,
					views_count : 59,
					forwards_count : 73,
					reactions : array(
						$client->reactionCount(...),
					),
					reactions_count : 63,
					recent_viewers : array(-3321930212666643356),
				),
				sent_reaction : $client->reactionEmpty(),
				albums : array(86),
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6183723824691765839,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2532786744062931080,
			title : 'BbE4ufqyLWVdwMJv',
			photo : $client->chatPhotoEmpty(),
			participants_count : 12,
			date : 63,
			version : 87,
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
				until_date : 85,
			),
		),
		$client->chatForbidden(
			id : 8331328345459440775,
			title : 'id9nSWDMVjsyAGg0',
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
			id : 6452917777379473263,
			access_hash : -2303218597500596285,
			title : '6HyEKh8ftcAzbglx',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 95,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'gHAG7Qw0T61UhfR8',
					reason : 'j9uKm6Obis7zV4ax',
					text : '59VUsGkhKpuTfOH8',
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
				until_date : 96,
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
				until_date : 56,
			),
			participants_count : 61,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 29,
			),
			color : $client->peerColor(
				color : 55,
				background_emoji_id : 4113579403461664446,
			),
			profile_color : $client->peerColor(
				color : 46,
				background_emoji_id : -8446934910477290833,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 12,
			subscription_until_date : 19,
			bot_verification_icon : -6248398085298802151,
			send_paid_messages_stars : 5389143137464465779,
			linked_monoforum_id : -6722163763618578586,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -5196122702644094907,
			access_hash : 3770248031984554339,
			title : 'WICT1VYRm6dAHv3O',
			until_date : 72,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3408850157055688541,
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
			id : -617259404100713676,
			access_hash : 5211326149346279466,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 91,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Vwbz3Zpe4nohPHyU',
					reason : 'PiFHhjKtlS9uDsWE',
					text : 'zd2vpIWFEXTf6bLJ',
				),
			),
			bot_inline_placeholder : 'xXAPCd4MzRlgniYB',
			lang_code : 'YQTfimE2xHdnKB94',
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
				max_id : 34,
			),
			color : $client->peerColor(
				color : 93,
				background_emoji_id : 6887839443830695431,
			),
			profile_color : $client->peerColor(
				color : 52,
				background_emoji_id : 5133815734717292820,
			),
			bot_active_users : 100,
			bot_verification_icon : -3867876832113796369,
			send_paid_messages_stars : 4745620195911571871,
		),
	),
);
```