# phone.groupParticipants

**Description** : *Info about the participants of a group call or livestream*

**Layer** : 214

```tl
phone.groupParticipants#f47751b6 count:int participants:Vector<GroupCallParticipant> next_offset:string chats:Vector<Chat> users:Vector<User> version:int = phone.GroupParticipants;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Number of participants |
| <mark>participants</mark> | [`Vector<GroupCallParticipant>`](type/GroupCallParticipant) | List of participants |
| <mark>next_offset</mark> | [`string`](type/string) | If not empty, the specified list of participants is partial, and more participants can be fetched specifying this parameter as offset in phone.getGroupParticipants |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| <mark>version</mark> | [`int`](type/int) | Version info |

---

## Type

[phone.GroupParticipants](type/phone.GroupParticipants)

---

## Example

```php
$phoneGroupParticipants = $client->phone->groupParticipants(
	count : 86,
	participants : array(
		$client->groupCallParticipant(
			muted : true,
			left : true,
			can_self_unmute : true,
			just_joined : true,
			versioned : true,
			min : true,
			muted_by_you : true,
			volume_by_admin : true,
			self : true,
			video_joined : true,
			peer : $client->peerUser(
				user_id : -1176829954135278197,
			),
			date : 25,
			active_date : 93,
			source : 72,
			volume : 99,
			about : 'ua5wIUiJGzfkHLEX',
			raise_hand_rating : 1070073466314476121,
			video : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'xVEgFA5WNKbQutJh',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 60,
			),
			presentation : $client->groupCallParticipantVideo(
				paused : true,
				endpoint : 'ObtxAeC8psTV5XQu',
				source_groups : array(
					$client->groupCallParticipantVideoSourceGroup(...),
				),
				audio_source : 100,
			),
		),
	),
	next_offset : 'FPucN4KOexold9fR',
	chats : array(
		$client->chatEmpty(
			id : 1122699975565441147,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -5374227684416837943,
			title : 'IXesAYyWZ2GB3Di6',
			photo : $client->chatPhotoEmpty(),
			participants_count : 83,
			date : 34,
			version : 80,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 26,
			),
		),
		$client->chatForbidden(
			id : -6304277983524021572,
			title : 'RQstNmqWoc703Vzy',
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
			id : -8478156626656773504,
			access_hash : -4979053913279577158,
			title : '2PMIKVTD9kguvS5x',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 46,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'ighvqES3XyZV82G5',
					reason : 'T3cteXGJ9OwEvk0I',
					text : '6dGTD0MWtsw1nVNU',
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
				until_date : 85,
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
				until_date : 40,
			),
			participants_count : 19,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 77,
			color : $client->peerColor(
				color : 26,
				background_emoji_id : 7078639849053860074,
			),
			profile_color : $client->peerColor(
				color : 53,
				background_emoji_id : 692159158537429979,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 32,
			subscription_until_date : 49,
			bot_verification_icon : -2689509815889708266,
			send_paid_messages_stars : -2678900834584210600,
			linked_monoforum_id : 4387560525168803085,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -2966928807966184012,
			access_hash : -953208136003455443,
			title : 'nI49v6oOKAC02uj1',
			until_date : 8,
		),
	),
	users : array(
		$client->userEmpty(
			id : 4197302839263232605,
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
			id : 7262848950372215470,
			access_hash : -7901304278134295328,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 51,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cLiOYqSzNJPAFght',
					reason : 'FhXmEH5iKnyNkarL',
					text : 'PNyhmOGXE07uiKHA',
				),
			),
			bot_inline_placeholder : 'JjIA731wVWOlbYTt',
			lang_code : 'obmzI5hYZJWuV7cG',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 0,
			color : $client->peerColor(
				color : 11,
				background_emoji_id : 8061012361008038943,
			),
			profile_color : $client->peerColor(
				color : 20,
				background_emoji_id : -2782926107371341215,
			),
			bot_active_users : 82,
			bot_verification_icon : 8282018802293531317,
			send_paid_messages_stars : 2390754234846143353,
		),
	),
	version : 10,
);
```