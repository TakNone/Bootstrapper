# contacts.found

**Description** : *Users found by name substring and auxiliary data*

**Layer** : 216

```tl
contacts.found#b3134d9d my_results:Vector<Peer> results:Vector<Peer> chats:Vector<Chat> users:Vector<User> = contacts.Found;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>my_results</mark> | [`Vector<Peer>`](type/Peer) | Personalized results |
| <mark>results</mark> | [`Vector<Peer>`](type/Peer) | List of found user identifiers |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Found chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users |

---

## Type

[contacts.Found](type/contacts.Found)

---

## Example

```php
$contactsFound = $client->contacts->found(
	my_results : array(
		$client->peerUser(
			user_id : 4619375991853305510,
		),
		$client->peerChat(
			chat_id : 1281224705174382214,
		),
		$client->peerChannel(
			channel_id : -8689931870163282461,
		),
	),
	results : array(
		$client->peerUser(
			user_id : -7870788246574470745,
		),
		$client->peerChat(
			chat_id : 7108540250596698416,
		),
		$client->peerChannel(
			channel_id : -1484621601851583958,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6397108014763675732,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 8756162873062217896,
			title : '9uTKc1semBSaD7f3',
			photo : $client->chatPhotoEmpty(),
			participants_count : 94,
			date : 24,
			version : 98,
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
				until_date : 46,
			),
		),
		$client->chatForbidden(
			id : 4462337703953618394,
			title : '43YhM1f7ODqkHBzj',
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
			id : 5980370963407047063,
			access_hash : 463154424989346485,
			title : '58WUb7aoZxdGEyCR',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 24,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'eXYi5QazCsOU028A',
					reason : 'RKMGs3qcETjuBPAZ',
					text : 'XDFB0SzVbr9LaxWM',
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
				until_date : 92,
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
				until_date : 75,
			),
			participants_count : 37,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 42,
			color : $client->peerColor(
				color : 57,
				background_emoji_id : -6988002446840511569,
			),
			profile_color : $client->peerColor(
				color : 35,
				background_emoji_id : -407082227012073295,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 37,
			subscription_until_date : 95,
			bot_verification_icon : -8871214050510832651,
			send_paid_messages_stars : -5293335159160940998,
			linked_monoforum_id : -8080770726425669667,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 7984504884975788771,
			access_hash : 865606871687741367,
			title : 'sxfhGu4MeBqR5yd2',
			until_date : 96,
		),
	),
	users : array(
		$client->userEmpty(
			id : -4859503735091760561,
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
			id : 5619096715127812024,
			access_hash : -653825677677612440,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 68,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'poHwDsQiAjLyEVgv',
					reason : '12B5OPhMId68xaQo',
					text : 'DQhOnzrp0B9tP7C6',
				),
			),
			bot_inline_placeholder : '9OAWKvZCVXprIQwS',
			lang_code : 'SMufNXqKgopzVQUF',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 77,
			color : $client->peerColor(
				color : 0,
				background_emoji_id : -1144776793428682702,
			),
			profile_color : $client->peerColor(
				color : 70,
				background_emoji_id : -8568175532913917119,
			),
			bot_active_users : 8,
			bot_verification_icon : 1901076572526323317,
			send_paid_messages_stars : -8253922660670525241,
		),
	),
);
```