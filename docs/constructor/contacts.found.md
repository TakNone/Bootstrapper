# contacts.found

**Description** : *Users found by name substring and auxiliary data*

**Layer** : 225

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
			user_id : 5725747459520146428,
		),
		$client->peerChat(
			chat_id : 2210188358793597096,
		),
		$client->peerChannel(
			channel_id : 3434388485658551043,
		),
	),
	results : array(
		$client->peerUser(
			user_id : -7865952675138096729,
		),
		$client->peerChat(
			chat_id : 4018672410704095947,
		),
		$client->peerChannel(
			channel_id : 8631031653240590749,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 4554872120902138439,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -400892511691835867,
			title : 'HPIiA57J1YkKObCh',
			photo : $client->chatPhotoEmpty(),
			participants_count : 8,
			date : 56,
			version : 100,
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 73,
			),
		),
		$client->chatForbidden(
			id : -1751670508868160065,
			title : 'g5jsRGkeHStZwLO7',
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
			id : 8203390683164120074,
			access_hash : -3807507877961143871,
			title : 'XsUbZiDrqK1d95IA',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 46,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'd3zxXZuMAUWgycb9',
					reason : '7OXLHRuzJv245QbW',
					text : 'HWLpmZiXfNzMkTub',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 99,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 28,
			),
			participants_count : 29,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 56,
			),
			color : $client->peerColor(
				color : 19,
				background_emoji_id : 3724517007430888593,
			),
			profile_color : $client->peerColor(
				color : 23,
				background_emoji_id : 6238396696064006714,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 55,
			subscription_until_date : 69,
			bot_verification_icon : 7017598103333266621,
			send_paid_messages_stars : -8744726005343767802,
			linked_monoforum_id : 993761414945804034,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -869721524851681671,
			access_hash : 9124443615644733356,
			title : 'hsJEefK5j0NuDQ9c',
			until_date : 70,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8244404308707133408,
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
			bot_can_manage_bots : true,
			bot_guestchat : true,
			id : -1899800723722666645,
			access_hash : 4642928942946985442,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 49,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'kl6a0puRAgLjHxsq',
					reason : 'qTxROavm9L8ZyDjn',
					text : 'kdFGzXJf15p6SPju',
				),
			),
			bot_inline_placeholder : 'BfDR02EzMwOsbuQN',
			lang_code : '851FO6UNycEdHPi2',
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
				max_id : 16,
			),
			color : $client->peerColor(
				color : 73,
				background_emoji_id : -5631666048705529418,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : 5874362958115755382,
			),
			bot_active_users : 26,
			bot_verification_icon : 6555216960921156183,
			send_paid_messages_stars : -1081361700529453942,
		),
	),
);
```