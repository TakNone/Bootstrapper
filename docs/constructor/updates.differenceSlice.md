# updates.differenceSlice

**Description** : *Incomplete list of occurred events*

**Layer** : 225

```tl
updates.differenceSlice#a8fb1981 new_messages:Vector<Message> new_encrypted_messages:Vector<EncryptedMessage> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> intermediate_state:updates.State = updates.Difference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | List of new messages |
| <mark>new_encrypted_messages</mark> | [`Vector<EncryptedMessage>`](type/EncryptedMessage) | New messages from the encrypted event sequence |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in events |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in events |
| <mark>intermediate_state</mark> | [`updates.State`](type/updates.State) | Intermediary state |

---

## Type

[updates.Difference](type/updates.Difference)

---

## Example

```php
$updatesDifference = $client->updates->differenceSlice(
	new_messages : array(
		$client->messageEmpty(
			id : 46,
			peer_id : $client->peerUser(
				user_id : -1159805819766580283,
			),
		),
		$client->message(
			out : true,
			mentioned : true,
			media_unread : true,
			silent : true,
			post : true,
			from_scheduled : true,
			legacy : true,
			edit_hide : true,
			pinned : true,
			noforwards : true,
			invert_media : true,
			offline : true,
			video_processing_pending : true,
			paid_suggested_post_stars : true,
			paid_suggested_post_ton : true,
			id : 79,
			from_id : $client->peerUser(
				user_id : -5634945130164690032,
			),
			from_boosts_applied : 79,
			from_rank : '3Zpbem2sDiqoP4Uf',
			peer_id : $client->peerUser(
				user_id : -8123801776605435184,
			),
			saved_peer_id : $client->peerUser(
				user_id : 5185600050312163752,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : -829117951211062256,
				),
				from_name : 'C081g5ZqXexyvhPS',
				date : 24,
				channel_post : 6,
				post_author : 'wmUx63Xjv2BLhtbM',
				saved_from_peer : $client->peerUser(
					user_id : 2421939885131148965,
				),
				saved_from_msg_id : 18,
				saved_from_id : $client->peerUser(
					user_id : 7605866837566231044,
				),
				saved_from_name : 'jJo5GrKRb7lSasUM',
				saved_date : 56,
				psa_type : 'Y5pNFvmKEMR8kqhc',
			),
			via_bot_id : 3225924607201522998,
			via_business_bot_id : 7083439171311120795,
			guestchat_via_from : $client->peerUser(
				user_id : 8691994392239932812,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 91,
				reply_to_peer_id : $client->peerUser(
					user_id : -2918925740823963378,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'MsWol7ru1g4Fe8Ey',
					date : 15,
					channel_post : 99,
					post_author : 'T2fBaiNkU4qAd6Jt',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 42,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'fAaruZzR0g2NUwFk',
					saved_date : 51,
					psa_type : '43cH6KkZFnQNextu',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 19,
				quote_text : 'TDUFlHtqacBMbrZ1',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 26,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 22,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 51,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 95,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 94,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 73,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 29,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 88,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 62,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 14,
						language : 'lnK4xLAmMOkqjGDz',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 66,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 58,
						user_id : 3255196797954696493,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 71,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 21,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 40,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 90,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 60,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 40,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 17,
						document_id : 6545641457390482171,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 49,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 14,
						date : 56,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 31,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 8,
						old_text : 'xPNXWKhCm68kH0eA',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 85,
					),
				),
				quote_offset : 30,
				todo_item_id : 75,
				poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			date : 47,
			message : 'vW7lQqn0EDezoPuY',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 82,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 75,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 87,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 86,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 50,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 76,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 15,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 44,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 50,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 89,
					language : '5IorOjSWdxw1heXt',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 66,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 40,
					user_id : 4131453064562431419,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 20,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 80,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 71,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 63,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 75,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 6,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 79,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 57,
					document_id : 3192220426036012736,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 84,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 49,
					date : 84,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 37,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 9,
					old_text : 'oupMvsZJ67FTtzxA',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 99,
				),
			),
			views : 55,
			forwards : 27,
			replies : $client->messageReplies(
				comments : true,
				replies : 43,
				replies_pts : 20,
				recent_repliers : array(
					$client->peerUser(
						user_id : -2826284778249296372,
					),
					$client->peerChat(
						chat_id : -331877916058322006,
					),
					$client->peerChannel(
						channel_id : -667029500916550493,
					),
				),
				channel_id : -1938663573727333706,
				max_id : 62,
				read_max_id : 42,
			),
			edit_date : 82,
			post_author : 'Fnks9TuASzWhi8GX',
			grouped_id : 4916180542224185533,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 66,
						reaction : $client->reactionEmpty(...),
						count : 23,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 39,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 43,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'FtW7SlX05yYIJ6Zm',
					reason : 'jrmAMHBwVzkIX31U',
					text : 'LioRG1FYjEbhsKvI',
				),
			),
			ttl_period : 22,
			quick_reply_shortcut_id : 29,
			effect : 4853851992717421978,
			factcheck : $client->factCheck(
				need_check : true,
				country : 'GDSZtsanPVEXoub5',
				text : $client->textWithEntities(
					text : 'vcn4tITozCXUPNYx',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				hash : 0,
			),
			report_delivery_until_date : 45,
			paid_message_stars : 7692433364236409334,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -6250608927415960594,
					nanos : 50,
				),
				schedule_date : 75,
			),
			schedule_repeat_period : 53,
			summary_from_language : 'A8Rt0wbGIs3xgvC6',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 41,
			from_id : $client->peerUser(
				user_id : 2830407013654948531,
			),
			peer_id : $client->peerUser(
				user_id : 3690561916980962289,
			),
			saved_peer_id : $client->peerUser(
				user_id : 9045598448586119908,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 92,
				reply_to_peer_id : $client->peerUser(
					user_id : 7052148236370068664,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : 'oFJCMA19XOs6vkge',
					date : 87,
					channel_post : 51,
					post_author : 'ok3H9FMeGVTa54Pf',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 46,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'HuPNvAIc9bmCFhY3',
					saved_date : 6,
					psa_type : '1BSP6ZDRqmVeO58c',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 53,
				quote_text : 'S8Z3czLOXiG0lHfE',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 34,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 38,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 18,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 39,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 91,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 58,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 52,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 68,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 28,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 86,
						language : 'RBec7pqVdwN9FGmt',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 3,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 48,
						user_id : -4351537595729079882,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 92,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 5,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 92,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 1,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 19,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 4,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 27,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 52,
						document_id : -4914816558646276418,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 10,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 74,
						date : 7,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 89,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 63,
						old_text : 'a3juLp6toWqHT8bd',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 73,
					),
				),
				quote_offset : 1,
				todo_item_id : 51,
				poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			date : 12,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 95,
						reaction : $client->reactionEmpty(...),
						count : 53,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 90,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 36,
					),
				),
			),
			ttl_period : 30,
		),
	),
	new_encrypted_messages : array(
		$client->encryptedMessage(
			random_id : -2244649540264940496,
			chat_id : 2,
			date : 5,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			file : $client->encryptedFileEmpty(),
		),
		$client->encryptedMessageService(
			random_id : 9057905799596650822,
			chat_id : 40,
			date : 15,
			bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 69,
				peer_id : $client->peerUser(
					user_id : 8042997403881850108,
				),
			),
			pts : 13,
			pts_count : 1,
		),
		$client->updateMessageID(
			id : 97,
			random_id : 6705042586026283797,
		),
		$client->updateDeleteMessages(
			messages : array(46),
			pts : 82,
			pts_count : 59,
		),
		$client->updateUserTyping(
			user_id : 4931502991493080412,
			top_msg_id : 58,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : 4791357781133476356,
			from_id : $client->peerUser(
				user_id : 7904980420913552064,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 8168294011173880012,
				self_participant : $client->chatParticipant(
					user_id : 5945866448136975859,
					inviter_id : -59552421864596432,
					date : 8,
					rank : '6RMcXVWYCp2v5yiO',
				),
			),
		),
		$client->updateUserStatus(
			user_id : -9139149879250545530,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 1505853320050786229,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 0,
			date : 19,
			device : 'iQ0hMczAIv1xsFCg',
			location : 'XeEfHOZPg3sK7JTN',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : 508927083848841868,
				chat_id : 58,
				date : 81,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 71,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 50,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 48,
			),
			date : 6,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 47,
			max_date : 46,
			date : 16,
		),
		$client->updateChatParticipantAdd(
			chat_id : -4660594862449175966,
			user_id : 6041912330022537373,
			inviter_id : -1366165496262354026,
			date : 71,
			version : 37,
		),
		$client->updateChatParticipantDelete(
			chat_id : 3979111324085917747,
			user_id : 7111667894404301207,
			version : 87,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 4,
					ip_address : '127.0.0.1',
					port : 20,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : 5791330979039825146,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 61,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 0,
			type : 'JdxLaSCVRuFnhEg5',
			message : 'fl5wmeVdhS3PI9Mv',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 64,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 1,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 2,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 88,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 79,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 78,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 57,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 66,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 57,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 80,
					language : 'rSfdXIwL2UbnhlDs',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 11,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 69,
					user_id : 4545778886979261330,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 1,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 19,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 88,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 60,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 85,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 39,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 5,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 50,
					document_id : 1492350365073746586,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 35,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 66,
					date : 3,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 91,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 47,
					old_text : 'vaXArDGYyueo4VHF',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 97,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(-3709270496111378211),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(-5249560902556400432),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-6956740705956064744),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-4061913859500029197),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 833459879186914282,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 55,
			peer : $client->peerUser(
				user_id : 8539973291682835894,
			),
			top_msg_id : 44,
			max_id : 76,
			still_unread_count : 4,
			pts : 100,
			pts_count : 5,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 309864090920075,
			),
			max_id : 75,
			pts : 94,
			pts_count : 93,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 7300616578227133257,
				url : 'https://docs.liveproto.dev',
			),
			pts : 53,
			pts_count : 26,
		),
		$client->updateReadMessagesContents(
			messages : array(0),
			pts : 39,
			pts_count : 100,
			date : 35,
		),
		$client->updateChannelTooLong(
			channel_id : 5504753278966005694,
			pts : 20,
		),
		$client->updateChannel(
			channel_id : 5435811465358579350,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 27,
				peer_id : $client->peerUser(
					user_id : -7979467975440798071,
				),
			),
			pts : 42,
			pts_count : 75,
		),
		$client->updateReadChannelInbox(
			folder_id : 57,
			channel_id : -5219197811858266317,
			max_id : 62,
			still_unread_count : 61,
			pts : 19,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 5281783673692628772,
			messages : array(72),
			pts : 63,
			pts_count : 74,
		),
		$client->updateChannelMessageViews(
			channel_id : -8167922443090179514,
			id : 58,
			views : 94,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 2621089061446567163,
			user_id : -3388967797059800903,
			is_admin : false,
			version : 60,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 62,
					id : -2092717768115917482,
					access_hash : 3936106842362210543,
					title : 'nhFGoO0fWBAC7Yzr',
					short_name : 'kgXr2KF5E0wsDMxT',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 93,
					thumb_version : 3,
					thumb_document_id : -4551676362351219311,
					count : 80,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'YzOg0lj1NXxt4Fya',
						documents : array(-7078157342718533039),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : 2830940754445155482,
						keyword : array('dJP95NM1rGqvi2ft'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -5463478181254875138,
					),
					$client->document(
						id : -4443310638433940794,
						access_hash : -3382481414376801513,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 6,
						mime_type : 'XsRBJCUdwA50O7jb',
						size : 2209819601931733656,
						thumbs : array(
							$client->photoSizeEmpty(...),
							$client->photoSize(...),
							$client->photoCachedSize(...),
							$client->photoStrippedSize(...),
							$client->photoSizeProgressive(...),
							$client->photoPathSize(...),
						),
						video_thumbs : array(
							$client->videoSize(...),
							$client->videoSizeEmojiMarkup(...),
							$client->videoSizeStickerMarkup(...),
						),
						dc_id : 80,
						attributes : array(
							$client->documentAttributeImageSize(...),
							$client->documentAttributeAnimated(...),
							$client->documentAttributeSticker(...),
							$client->documentAttributeVideo(...),
							$client->documentAttributeAudio(...),
							$client->documentAttributeFilename(...),
							$client->documentAttributeHasStickers(...),
							$client->documentAttributeCustomEmoji(...),
						),
					),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(6325906662808886125),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 4542684775155961946,
			user_id : 2562957150103845128,
			query : 'XsUkQWD5ElHemrvV',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'ep8dJUr6PzgqEi31',
		),
		$client->updateBotInlineSend(
			user_id : 7549885600513516497,
			query : 'OzATNEKtxlr64dsp',
			geo : $client->geoPointEmpty(),
			id : 'd5S3vTFjcJBarKGM',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 54,
				id : 6803352351763058315,
				access_hash : 6025839160382439665,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 34,
				peer_id : $client->peerUser(
					user_id : -5507143199974410447,
				),
			),
			pts : 82,
			pts_count : 15,
		),
		$client->updateBotCallbackQuery(
			query_id : 707503696369303393,
			user_id : 423002846507742928,
			peer : $client->peerUser(
				user_id : -2248984741302945396,
			),
			msg_id : 96,
			chat_instance : -2954188051342115075,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'pDSQs1zcLfmH6IZR',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 97,
				peer_id : $client->peerUser(
					user_id : -6156577922683879659,
				),
			),
			pts : 52,
			pts_count : 73,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 715415176439646516,
			user_id : 6941435606691732041,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 30,
				id : 6791555093747742554,
				access_hash : 985635868906594682,
			),
			chat_instance : 5131986084823378857,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '8wUvtQSVDbJIhNc6',
		),
		$client->updateReadChannelOutbox(
			channel_id : 4761904106384362411,
			max_id : 46,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -7366607066078083866,
			),
			top_msg_id : 60,
			saved_peer_id : $client->peerUser(
				user_id : -5619114295058564859,
			),
			draft : $client->draftMessageEmpty(
				date : 99,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 8427622755267255209,
			webpage : $client->webPageEmpty(
				id : 6547194676145286,
				url : 'https://docs.liveproto.dev',
			),
			pts : 13,
			pts_count : 85,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 97,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 561470442607026376,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 34,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 4324470438929867426,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 1,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'J24QTmwbpEeyC5qa',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 8617292737187096200,
			data : $client->dataJSON(
				data : 'Uehp0nRzA3dfNXFj',
			),
			timeout : 17,
		),
		$client->updateBotShippingQuery(
			query_id : 5858815009939655628,
			user_id : 319077296730588588,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'yx9haQKYo4gOSdnC',
				street_line2 : 'S7kVNzgYP6OZ9sXo',
				city : 'yLvozdm6W5wbC3as',
				state : 'DZlzpeMBU4Imd0NL',
				country_iso2 : 'E0mVBHLxGdtASOsW',
				post_code : 'Rl7Drg4nGJbVLK2q',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 8794290366168633429,
			user_id : -2856818894146243528,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'uZamQsxlXGY1w9Eb',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'zyAROu1nPdWfxbpS',
					street_line2 : 'HMYrSV4qeNtU3mLy',
					city : 'qBtp0LdxH5aNkgXZ',
					state : 'NKDEmRjk8G6HzU7f',
					country_iso2 : 'fHec82mhSQDysk95',
					post_code : 'jfgOZJFMBXm1V6Rp',
				),
			),
			shipping_option_id : '7jduZ5ap3SGkWsIy',
			currency : 'zvTng2Imxp3dRhXU',
			total_amount : 2257299674428068700,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 7611127056359552139,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'LnHuZYpd4W0BUXCI',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'lKtHBi0A4mVREpGz',
				from_version : 41,
				version : 52,
				strings : array(
					$client->langPackString(
						key : 'zPyThe3ImuYf0dpU',
						value : '8sUVrEYOCNBldwRL',
					),
					$client->langPackStringPluralized(
						key : 'Oe2b0Jy6rowKVPuq',
						zero_value : '7rbm6OAzv2Zn1VUd',
						one_value : '4FfTLA5v7YINlnZB',
						two_value : '1wM4S7cgrKQ2LyJH',
						few_value : '3x1oCRztpGiSqm06',
						many_value : 'l67zWEdDRH0PUFqr',
						other_value : 'pJtYHAfQkUnLN85V',
					),
					$client->langPackStringDeleted(
						key : 'razOXYSPBCdqHvsc',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 7900189568815827713,
			top_msg_id : 68,
			saved_peer_id : $client->peerUser(
				user_id : -7427821983018523398,
			),
			messages : array(82),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -4006561918627122474,
			available_min_id : 26,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -5835241844461332263,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 175608807403350374,
			),
		),
		$client->updateMessagePoll(
			peer : $client->peerUser(
				user_id : 8794150472291978677,
			),
			msg_id : 31,
			top_msg_id : 68,
			poll_id : -5813872999348962551,
			poll : $client->poll(
				id : -5379672616150077876,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				open_answers : true,
				revoting_disabled : true,
				shuffle_answers : true,
				hide_results_until_close : true,
				creator : true,
				subscribers_only : true,
				question : $client->textWithEntities(
					text : 'icBxNlX2AQTv85Ud',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						media : $client->messageMediaEmpty(...),
						added_by : $client->peerUser(...),
						date : 78,
					),
					$client->inputPollAnswer(
						text : $client->textWithEntities(...),
						media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
					),
				),
				close_period : 29,
				close_date : 53,
				countries_iso2 : array('Z4nsajM6NqoXPTCi'),
				hash : 0,
			),
			results : $client->pollResults(
				min : true,
				has_unread_votes : true,
				can_view_stats : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 72,
						recent_voters : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
					),
				),
				total_voters : 84,
				recent_voters : array(
					$client->peerUser(
						user_id : -8375036202653742370,
					),
					$client->peerChat(
						chat_id : 4150473437259383521,
					),
					$client->peerChannel(
						channel_id : 2473930600566877554,
					),
				),
				solution : '70ugtbzw1xAVsTNo',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 57,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 39,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 81,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 27,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 51,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 74,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 60,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 91,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 4,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 13,
						language : '4c1lGq38R0mgQyKJ',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 34,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 95,
						user_id : 2210812272362658736,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 50,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 20,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 37,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 23,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 84,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 55,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 41,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 74,
						document_id : -3956454391552444433,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 2,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 20,
						date : 0,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 3,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 64,
						old_text : 'MnzOA7fQ5Z1PyR4x',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 66,
					),
				),
				solution_media : $client->messageMediaEmpty(),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -455404909612635453,
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
				until_date : 61,
			),
			version : 3,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 558580539299707003,
					),
					folder_id : 44,
				),
			),
			pts : 96,
			pts_count : 61,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -3658869198763134431,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 8,
				request_chat_title : 'KFTMUJks3415I9lu',
				request_chat_date : 73,
				business_bot_id : -8981033383554941354,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 8811161289991029070,
				registration_month : 'w1QtiA8goEdYhWX6',
				phone_country : '+1234567890',
				name_change_date : 68,
				photo_change_date : 7,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : -266383027760930590,
					),
					expires : 23,
					distance : 81,
				),
				$client->peerSelfLocated(
					expires : 55,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 12,
				peer_id : $client->peerUser(
					user_id : -976735787298338786,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : 7303885456637134768,
			),
			messages : array(80),
			sent_messages : array(67),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -2024735587928336494,
				access_hash : 454867037269174055,
				slug : '76KPBVlyZCg0eiXv',
				title : '6Yi05kgWsQjNM4Il',
				document : $client->documentEmpty(
					id : -3155211122794171377,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 9,
						outbox_accent_color : 96,
						message_colors : array(24),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : '9QbovCrIlWuahFmU',
				installs_count : 56,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -4661831105110664889,
			),
			msg_id : 41,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 4077701580280838254,
			peer : $client->peerUser(
				user_id : -7415965098937126421,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			positions : array(38),
			qts : 49,
		),
		$client->updateDialogFilter(
			id : 53,
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
				id : 84,
				title : $client->textWithEntities(
					text : 'wcL0gVMW1TRrenYP',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				emoticon : 'cPh0VHrwjkWseOZN',
				color : 45,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(97),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -191578104561103893,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : 3253692681925794080,
			id : 25,
			forwards : 55,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 4762679320140706368,
			top_msg_id : 18,
			read_max_id : 26,
			broadcast_id : 3865560602038864320,
			broadcast_post : 84,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -4253823488959747317,
			top_msg_id : 38,
			read_max_id : 71,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -5457513541104685556,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -1805878459593367104,
			top_msg_id : 50,
			from_id : $client->peerUser(
				user_id : -8287163011480085718,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -6581627383463666508,
			),
			messages : array(35),
			pts : 53,
			pts_count : 58,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : 6915777665165794633,
			messages : array(44),
			pts : 100,
			pts_count : 56,
		),
		$client->updateChat(
			chat_id : -1843014102554597186,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -2053713916112999714,
				access_hash : 9002186851664773608,
			),
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
						user_id : 3876225284791371210,
					),
					date : 61,
					active_date : 9,
					source : 73,
					volume : 45,
					about : 'WyGPoa6vg3MDn9mB',
					raise_hand_rating : -4647959256830075571,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'uWcafjPvm2AlkdSh',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 21,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'oFgVRxu7GWzKPt5k',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 76,
					),
					paid_stars_total : -6929310791621974546,
				),
			),
			version : 40,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 7449927734555452452,
			),
			call : $client->groupCallDiscarded(
				id : 6171509905330338319,
				access_hash : 1877796779938748137,
				duration : 32,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -77108345064022654,
			),
			ttl_period : 94,
		),
		$client->updateChatParticipant(
			chat_id : 5641305576653724811,
			date : 14,
			actor_id : 6960741983854614151,
			user_id : 6044413685714284390,
			prev_participant : $client->chatParticipant(
				user_id : -3703931227506737587,
				inviter_id : 437201285435788088,
				date : 78,
				rank : '4DsrEu8HUPRATIK3',
			),
			new_participant : $client->chatParticipant(
				user_id : 1355049288212819259,
				inviter_id : -3305441720094581694,
				date : 0,
				rank : 'usYcR9Dq3jNIzltL',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'HS0jGecgd9MriLmn',
				admin_id : -2842687529798444552,
				date : 5,
				start_date : 49,
				expire_date : 95,
				usage_limit : 5,
				usage : 93,
				requested : 46,
				subscription_expired : 88,
				title : 'z8OtAfF2QXbsxhvN',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 62,
					amount : 8245139816106223638,
				),
			),
			qts : 82,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : -2714145298255156916,
			date : 9,
			actor_id : -8869501729090057681,
			user_id : 6847632384334927366,
			prev_participant : $client->channelParticipant(
				user_id : -4070465893426684308,
				date : 60,
				subscription_until_date : 2,
				rank : 'AkPG3nerijOZU5BN',
			),
			new_participant : $client->channelParticipant(
				user_id : -7942320299632350523,
				date : 68,
				subscription_until_date : 33,
				rank : 'Cr0Y94aspNAZ8ioR',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : '2djmplgwtq5R1rvT',
				admin_id : -5698350888406933438,
				date : 52,
				start_date : 50,
				expire_date : 52,
				usage_limit : 70,
				usage : 48,
				requested : 19,
				subscription_expired : 40,
				title : 'VhiBl9A8qCzQLryx',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 15,
					amount : 8107683282772015050,
				),
			),
			qts : 32,
		),
		$client->updateBotStopped(
			user_id : -3367978664390147364,
			date : 40,
			stopped : true,
			qts : 13,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'IL9wDbEf83r57UpR',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 4559815068936586123,
			),
			bot_id : -571131976280238269,
			commands : array(
				$client->botCommand(
					command : '6PsYyxV3Mngvm9uS',
					description : 'ZNej2HYQlDXvAqKO',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 4772915879841776121,
			),
			requests_pending : 88,
			recent_requesters : array(-8083080017051131581),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -5543089265250372314,
			),
			date : 49,
			user_id : -2514338489871009078,
			about : 'PolyR6QjBxEXshaG',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'TOJeZVoNtXqHUWF2',
				admin_id : 8676955253979929494,
				date : 8,
				start_date : 44,
				expire_date : 43,
				usage_limit : 84,
				usage : 45,
				requested : 55,
				subscription_expired : 49,
				title : 'BA4PQJSxRLktuTon',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 97,
					amount : -1516901232326287873,
				),
			),
			qts : 75,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -7929767766790291054,
			),
			msg_id : 77,
			top_msg_id : 65,
			saved_peer_id : $client->peerUser(
				user_id : 1419074654733740220,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 70,
						reaction : $client->reactionEmpty(...),
						count : 52,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 73,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 81,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -5976533621807613475,
		),
		$client->updateBotMenuButton(
			bot_id : -1035125768214406485,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -2301937957400262675,
			),
			msg_id : 31,
			transcription_id : 6808701594614647372,
			text : 'R9lFrvwTQYuGdoDy',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -6269096894690326185,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -3718377644377873760,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : -2397416801656911169,
			),
			msg_id : 21,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 58,
					h : 2,
					thumb : $client->photoSizeEmpty(
						type : 'aoGMqhy2rYVFmDAv',
					),
					video_duration : 37,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -1705888465083070809,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 6303411989059498364,
			),
			story : $client->storyItemDeleted(
				id : 86,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : 7472161003326998494,
			),
			max_id : 39,
		),
		$client->updateStoryID(
			id : 85,
			random_id : -7475547626077733917,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 30,
				cooldown_until_date : 91,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -7108612588072731248,
			),
			story_id : 15,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : 5220204224886899522,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : '5eKwnz9TSaZldcqE',
				user_id : -4409214843483499810,
				giveaway_msg_id : 32,
				date : 42,
				expires : 13,
				used_gift_slug : 'DARlf14y50nthgJz',
				multiplier : 45,
				stars : 1968183024422692233,
			),
			qts : 44,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -7190099747175407383,
			enabled : false,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 2977156976726299374,
			),
			wallpaper : $client->wallPaper(
				id : -1266992324194404412,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 1587102207027329471,
				slug : 'kuvbHjMScyToZCAI',
				document : $client->documentEmpty(
					id : 4662800994182615619,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 30,
					second_background_color : 15,
					third_background_color : 86,
					fourth_background_color : 79,
					intensity : 47,
					rotation : 94,
					emoticon : 'x8DZO2A7p9rmnYwq',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -3344420637315199824,
			),
			msg_id : 6,
			date : 28,
			actor : $client->peerUser(
				user_id : -7806848601723437084,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : '4QApuXteg7FSqxBJ',
				),
				$client->reactionCustomEmoji(
					document_id : 3143582011459752299,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'I9WKkgAiYNBG61vO',
				),
				$client->reactionCustomEmoji(
					document_id : 6990013362797078917,
				),
				$client->reactionPaid(),
			),
			qts : 51,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -7061129783079234576,
			),
			msg_id : 76,
			date : 13,
			reactions : array(
				$client->reactionCount(
					chosen_order : 22,
					reaction : $client->reactionEmpty(),
					count : 74,
				),
			),
			qts : 36,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 1404372172259402389,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -905830049487335213,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 65,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'd20KTyrU7WghPz3a',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 17,
					shortcut : '71uSAkyB3WLUQ9zr',
					top_message : 82,
					count : 95,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 58,
				shortcut : 'X9LZSehaqT5ujvBP',
				top_message : 93,
				count : 12,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 17,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 42,
				peer_id : $client->peerUser(
					user_id : -9178221689130870285,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 48,
			messages : array(82),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'xbDAdeSqo5R1JNMw',
				user_id : -1229472026157157022,
				dc_id : 43,
				date : 49,
				rights : $client->businessBotRights(
					reply : true,
					read_messages : true,
					delete_sent_messages : true,
					delete_received_messages : true,
					edit_name : true,
					edit_bio : true,
					edit_profile_photo : true,
					edit_username : true,
					view_gifts : true,
					sell_gifts : true,
					change_gift_settings : true,
					transfer_and_upgrade_gifts : true,
					transfer_stars : true,
					manage_stories : true,
				),
			),
			qts : 50,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'RO7laSxuoty6pFVJ',
			message : $client->messageEmpty(
				id : 63,
				peer_id : $client->peerUser(
					user_id : 1305197745427023475,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 90,
				peer_id : $client->peerUser(
					user_id : 2350368030758076976,
				),
			),
			qts : 7,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'l8GBs1FyoEWJznVT',
			message : $client->messageEmpty(
				id : 76,
				peer_id : $client->peerUser(
					user_id : 4798455547643069195,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 57,
				peer_id : $client->peerUser(
					user_id : 5853494750020949812,
				),
			),
			qts : 43,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'RZyqIcYV9QLdC5fB',
			peer : $client->peerUser(
				user_id : -8673211270751942388,
			),
			messages : array(92),
			qts : 28,
		),
		$client->updateNewStoryReaction(
			story_id : 87,
			peer : $client->peerUser(
				user_id : 4139099727901673493,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 3957405200178740625,
				nanos : 15,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -6805232560885244477,
			user_id : 470668381119817772,
			connection_id : 'YkiDOWdyGz4Z9Amo',
			message : $client->messageEmpty(
				id : 87,
				peer_id : $client->peerUser(
					user_id : 5383375283747857588,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 30,
				peer_id : $client->peerUser(
					user_id : -7186946814450292829,
				),
			),
			chat_instance : 3798557737813029571,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : 1696964396748544298,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : -3641094749863679965,
					nanos : 60,
				),
				available_balance : $client->starsAmount(
					amount : 3956916519406025737,
					nanos : 44,
				),
				overall_revenue : $client->starsAmount(
					amount : 3457155471304878623,
					nanos : 75,
				),
				next_withdrawal_at : 37,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -5753333481245600184,
			payload : 'XeV5FPbwpCEMcOfY',
			qts : 70,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 35,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 48,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : 3561960804717753900,
				access_hash : 1991177968618387855,
			),
			sub_chain_id : 57,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 77,
		),
		$client->updateReadMonoForumInbox(
			channel_id : -4860842821894585179,
			saved_peer_id : $client->peerUser(
				user_id : -6229214147548797342,
			),
			read_max_id : 37,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -2772831683847343402,
			saved_peer_id : $client->peerUser(
				user_id : 2415256894484106354,
			),
			read_max_id : 3,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 8248770744369018969,
			saved_peer_id : $client->peerUser(
				user_id : 824142457957463384,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 7583378760161387625,
				access_hash : -7886846095257372751,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 22,
				from_id : $client->peerUser(
					user_id : 9104439065595723705,
				),
				date : 54,
				message : $client->textWithEntities(
					text : 'ojiTG7BIzhMmHbnF',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				paid_message_stars : 3696187322017422854,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 8548952990511617091,
				access_hash : 6288262502992958444,
			),
			from_id : $client->peerUser(
				user_id : -1739069435453959624,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 675414820203326077,
			),
			topic_id : 73,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -8262698756302492439,
			),
			order : array(46),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : 8501856718127327909,
				access_hash : 3904022295026861150,
			),
			messages : array(78),
		),
		$client->updateStarGiftAuctionState(
			gift_id : 6830798070793423112,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -338829285751714024,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 4833102722837246291,
				bid_date : 16,
				min_bid_amount : 4391455614099131186,
				bid_peer : $client->peerUser(
					user_id : -5514752063520675253,
				),
				acquired_count : 22,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
		$client->updateChatParticipantRank(
			chat_id : 7609802342241155630,
			user_id : -2477402477294877701,
			rank : 'dKrlv2wL5aAWkOtn',
			version : 1,
		),
		$client->updateManagedBot(
			user_id : -968796663228475249,
			bot_id : -8479834855914139162,
			qts : 100,
		),
		$client->updateBotGuestChatQuery(
			query_id : -2775722271696708053,
			message : $client->messageEmpty(
				id : 52,
				peer_id : $client->peerUser(
					user_id : -1517542257243631365,
				),
			),
			reference_messages : array(
				$client->messageEmpty(
					id : 78,
					peer_id : $client->peerUser(
						user_id : 4268801444763546929,
					),
				),
				$client->message(
					out : true,
					mentioned : true,
					media_unread : true,
					silent : true,
					post : true,
					from_scheduled : true,
					legacy : true,
					edit_hide : true,
					pinned : true,
					noforwards : true,
					invert_media : true,
					offline : true,
					video_processing_pending : true,
					paid_suggested_post_stars : true,
					paid_suggested_post_ton : true,
					id : 6,
					from_id : $client->peerUser(
						user_id : 9047572660104697957,
					),
					from_boosts_applied : 57,
					from_rank : 'YA8aOIVEy5vNHlUR',
					peer_id : $client->peerUser(
						user_id : -5470206489725188627,
					),
					saved_peer_id : $client->peerUser(
						user_id : -4241018900617333608,
					),
					fwd_from : $client->messageFwdHeader(
						imported : true,
						saved_out : true,
						from_id : $client->peerUser(...),
						from_name : 'S7rnPoBM9bH1ZVWF',
						date : 33,
						channel_post : 70,
						post_author : 'oifEdNCURKtDwpzq',
						saved_from_peer : $client->peerUser(...),
						saved_from_msg_id : 34,
						saved_from_id : $client->peerUser(...),
						saved_from_name : 'Sjl5yMF7GD9UVCNX',
						saved_date : 5,
						psa_type : 'zjsFkl4VW3pfQyOx',
					),
					via_bot_id : 3162203532474723291,
					via_business_bot_id : 8109064746848395955,
					guestchat_via_from : $client->peerUser(
						user_id : -4219509959113361407,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_msg_id : 4,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 10,
						quote_text : 'ywfJXmeNqhvRGgWx',
						quote_entities : array(
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
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
						quote_offset : 2,
						todo_item_id : 82,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 54,
					message : 'q6LU17A0TZD2fSIb',
					media : $client->messageMediaEmpty(),
					reply_markup : $client->replyKeyboardHide(
						selective : true,
					),
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 27,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 53,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 18,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 95,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 25,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 6,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 97,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 84,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 57,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 88,
							language : 'QvRfsbM4m17N9P3V',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 52,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 16,
							user_id : -14728635670409603,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 12,
							user_id : $client->get_input_user(user : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 92,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 32,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 68,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 99,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 79,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 16,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 65,
							document_id : -8358992946804019820,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 36,
						),
						$client->messageEntityFormattedDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							offset : 0,
							length : 55,
							date : 1,
						),
						$client->messageEntityDiffInsert(
							offset : 0,
							length : 27,
						),
						$client->messageEntityDiffReplace(
							offset : 0,
							length : 2,
							old_text : 'MBaeX5y46kDd1f2v',
						),
						$client->messageEntityDiffDelete(
							offset : 0,
							length : 10,
						),
					),
					views : 64,
					forwards : 95,
					replies : $client->messageReplies(
						comments : true,
						replies : 96,
						replies_pts : 12,
						recent_repliers : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
						channel_id : 2806713805366968720,
						max_id : 55,
						read_max_id : 23,
					),
					edit_date : 11,
					post_author : 'krJdvW7SDMpaP24j',
					grouped_id : -7350491818288172274,
					reactions : $client->messageReactions(
						min : true,
						can_see_list : true,
						reactions_as_tags : true,
						results : array(
							$client->reactionCount(...),
						),
						recent_reactions : array(
							$client->messagePeerReaction(...),
						),
						top_reactors : array(
							$client->messageReactor(...),
						),
					),
					restriction_reason : array(
						$client->restrictionReason(
							platform : 'ASIftv5m4gekVhL1',
							reason : 'U3bjnB8okvLxOgzJ',
							text : 'evBlmL1yxtdf7VZD',
						),
					),
					ttl_period : 97,
					quick_reply_shortcut_id : 81,
					effect : -5977363499480086261,
					factcheck : $client->factCheck(
						need_check : true,
						country : 'GAY1TD5ELj2kMUcW',
						text : $client->textWithEntities(...),
						hash : 0,
					),
					report_delivery_until_date : 20,
					paid_message_stars : 3279549313980232790,
					suggested_post : $client->suggestedPost(
						accepted : true,
						rejected : true,
						price : $client->starsAmount(...),
						schedule_date : 82,
					),
					schedule_repeat_period : 29,
					summary_from_language : 'gOMELGqiH57168uA',
				),
				$client->messageService(
					out : true,
					mentioned : true,
					media_unread : true,
					reactions_are_possible : true,
					silent : true,
					post : true,
					legacy : true,
					id : 50,
					from_id : $client->peerUser(
						user_id : -376529900306713460,
					),
					peer_id : $client->peerUser(
						user_id : -4026482085427796350,
					),
					saved_peer_id : $client->peerUser(
						user_id : 1183704005897972182,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_msg_id : 50,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 82,
						quote_text : 'n8vSTqED71tRojfh',
						quote_entities : array(
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
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
						quote_offset : 93,
						todo_item_id : 17,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 37,
					action : $client->messageActionEmpty(),
					reactions : $client->messageReactions(
						min : true,
						can_see_list : true,
						reactions_as_tags : true,
						results : array(
							$client->reactionCount(...),
						),
						recent_reactions : array(
							$client->messagePeerReaction(...),
						),
						top_reactors : array(
							$client->messageReactor(...),
						),
					),
					ttl_period : 61,
				),
			),
			qts : 62,
		),
		$client->updateAiComposeTones(),
	),
	chats : array(
		$client->chatEmpty(
			id : 4781017925497950144,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 4155023922456731766,
			title : 'QLxIGlEqrS2tz7Ze',
			photo : $client->chatPhotoEmpty(),
			participants_count : 3,
			date : 14,
			version : 90,
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
				until_date : 49,
			),
		),
		$client->chatForbidden(
			id : -4558510727304515536,
			title : 'HeD24cKjRumpwz3X',
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
			id : 4466239029694321809,
			access_hash : -744535519305321386,
			title : 'b2kJn8m937ELdsRj',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 28,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'fDTxw6BUeG3uOAC8',
					reason : 'UNWFoTBIYVgGy0dx',
					text : 'HvYEuio7C2UpRZhQ',
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
				until_date : 34,
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
				until_date : 22,
			),
			participants_count : 7,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 93,
			),
			color : $client->peerColor(
				color : 74,
				background_emoji_id : 581283378935001402,
			),
			profile_color : $client->peerColor(
				color : 92,
				background_emoji_id : 4050428261599301491,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 25,
			subscription_until_date : 84,
			bot_verification_icon : -1432870843218869341,
			send_paid_messages_stars : 8032801001807565675,
			linked_monoforum_id : -8720735604768525271,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -6689169049836641742,
			access_hash : 7606807077817442088,
			title : 'mhUs2J5ln17uFXgI',
			until_date : 22,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8606801413135507327,
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
			id : 4732714522887259058,
			access_hash : -5725270360283817867,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 43,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'RKDE2TZ4k8IJ7G5h',
					reason : 'E8vxblafm74OU2jh',
					text : 'Rwx5sAIlptq0CTUn',
				),
			),
			bot_inline_placeholder : 'vxF2gr8kXAQVZTlI',
			lang_code : '69LmHKlnJRZV2j8B',
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
				max_id : 79,
			),
			color : $client->peerColor(
				color : 38,
				background_emoji_id : 919563829649350224,
			),
			profile_color : $client->peerColor(
				color : 81,
				background_emoji_id : -8770336840385893344,
			),
			bot_active_users : 2,
			bot_verification_icon : -7253067792938918621,
			send_paid_messages_stars : 2058004623281666590,
		),
	),
	intermediate_state : $client->updates->state(
		pts : 44,
		qts : 20,
		date : 47,
		seq : 77,
		unread_count : 6,
	),
);
```