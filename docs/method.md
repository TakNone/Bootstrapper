
# Methods

---

###### invokeAfterMsg

:link: [*Invokes a query after successful completion of one of the previous queries*](method/invokeAfterMsg)

---

###### invokeAfterMsgs

:link: [*Invokes a query after a successful completion of previous queries*](method/invokeAfterMsgs)

---

###### initConnection

:link: [*Initialize connection*](method/initConnection)

---

###### invokeWithLayer

:link: [*Invoke the specified query using the specified API layer*](method/invokeWithLayer)

---

###### invokeWithoutUpdates

:link: [*Invoke a request without subscribing the used connection for updates \(this is enabled by default for file queries\)*](method/invokeWithoutUpdates)

---

###### invokeWithMessagesRange

:link: [*Invoke with the given message range*](method/invokeWithMessagesRange)

---

###### invokeWithTakeout

:link: [*Invoke a method within a takeout session, see here &raquo; for more info*](method/invokeWithTakeout)

---

###### invokeWithBusinessConnection

:link: [*Invoke a method using a Telegram Business Bot connection, see here &raquo; for more info, including a list of the methods that can be wrapped in this constructor*](method/invokeWithBusinessConnection)

---

###### invokeWithGooglePlayIntegrity

:link: [*Official clients only, invoke with Google Play Integrity token*](method/invokeWithGooglePlayIntegrity)

---

###### invokeWithApnsSecret

:link: [*Official clients only, invoke with Apple push verification*](method/invokeWithApnsSecret)

---

###### invokeWithReCaptcha

:link: [*NOTHING*](method/invokeWithReCaptcha)

---

###### auth.sendCode

:link: [*Send the verification code for login*](method/auth.sendCode)

---

###### auth.signUp

:link: [*Registers a validated phone number in the system*](method/auth.signUp)

---

###### auth.signIn

:link: [*Signs in a user with a validated phone number*](method/auth.signIn)

---

###### auth.logOut

:link: [*Logs out the user*](method/auth.logOut)

---

###### auth.resetAuthorizations

:link: [*Terminates all user&#039;s authorized sessions except for the current one*](method/auth.resetAuthorizations)

---

###### auth.exportAuthorization

:link: [*Returns data for copying authorization to another data\-center*](method/auth.exportAuthorization)

---

###### auth.importAuthorization

:link: [*Logs in a user using a key transmitted from his native data\-center*](method/auth.importAuthorization)

---

###### auth.bindTempAuthKey

:link: [*Binds a temporary authorization key temp\_auth\_key\_id to the permanent authorization key perm\_auth\_key\_id\. Each permanent key may only be bound to one temporary key at a time, binding a new temporary key overwrites the previous one*](method/auth.bindTempAuthKey)

---

###### auth.importBotAuthorization

:link: [*Login as a bot*](method/auth.importBotAuthorization)

---

###### auth.checkPassword

:link: [*Try logging to an account protected by a 2FA password*](method/auth.checkPassword)

---

###### auth.requestPasswordRecovery

:link: [*Request recovery code of a 2FA password, only for accounts with a recovery email configured*](method/auth.requestPasswordRecovery)

---

###### auth.recoverPassword

:link: [*Reset the 2FA password using the recovery code sent using auth\.requestPasswordRecovery*](method/auth.recoverPassword)

---

###### auth.resendCode

:link: [*Resend the login code via another medium, the phone code type is determined by the return value of the previous auth\.sendCode/auth\.resendCode: see login for more info*](method/auth.resendCode)

---

###### auth.cancelCode

:link: [*Cancel the login verification code*](method/auth.cancelCode)

---

###### auth.dropTempAuthKeys

:link: [*Delete all temporary authorization keys except for the ones specified*](method/auth.dropTempAuthKeys)

---

###### auth.exportLoginToken

:link: [*Generate a login token, for login via QR code\.
The generated login token should be encoded using base64url, then shown as a tg://login?token=base64encodedtoken deep link &raquo; in the QR code*](method/auth.exportLoginToken)

---

###### auth.importLoginToken

:link: [*Login using a redirected login token, generated in case of DC mismatch during QR code login*](method/auth.importLoginToken)

---

###### auth.acceptLoginToken

:link: [*Accept QR code login token, logging in the app that generated it*](method/auth.acceptLoginToken)

---

###### auth.checkRecoveryPassword

:link: [*Check if the 2FA recovery code sent using auth\.requestPasswordRecovery is valid, before passing it to auth\.recoverPassword*](method/auth.checkRecoveryPassword)

---

###### auth.importWebTokenAuthorization

:link: [*Login by importing an authorization token*](method/auth.importWebTokenAuthorization)

---

###### auth.requestFirebaseSms

:link: [*Request an SMS code via Firebase*](method/auth.requestFirebaseSms)

---

###### auth.resetLoginEmail

:link: [*Reset the login email &raquo;*](method/auth.resetLoginEmail)

---

###### auth.reportMissingCode

:link: [*Official apps only, reports that the SMS authentication code wasn&#039;t delivered*](method/auth.reportMissingCode)

---

###### account.registerDevice

:link: [*Register device to receive PUSH notifications*](method/account.registerDevice)

---

###### account.unregisterDevice

:link: [*Deletes a device by its token, stops sending PUSH\-notifications to it*](method/account.unregisterDevice)

---

###### account.updateNotifySettings

:link: [*Edits notification settings from a given user/group, from all users/all groups*](method/account.updateNotifySettings)

---

###### account.getNotifySettings

:link: [*Gets current notification settings for a given user/group, from all users/all groups*](method/account.getNotifySettings)

---

###### account.resetNotifySettings

:link: [*Resets all notification settings from users and groups*](method/account.resetNotifySettings)

---

###### account.updateProfile

:link: [*Updates user profile*](method/account.updateProfile)

---

###### account.updateStatus

:link: [*Updates online user status*](method/account.updateStatus)

---

###### account.getWallPapers

:link: [*Returns a list of available wallpapers*](method/account.getWallPapers)

---

###### account.reportPeer

:link: [*Report a peer for violation of telegram&#039;s Terms of Service*](method/account.reportPeer)

---

###### account.checkUsername

:link: [*Validates a username and checks availability*](method/account.checkUsername)

---

###### account.updateUsername

:link: [*Changes username for the current user*](method/account.updateUsername)

---

###### account.getPrivacy

:link: [*Get privacy settings of current account*](method/account.getPrivacy)

---

###### account.setPrivacy

:link: [*Change privacy settings of current account*](method/account.setPrivacy)

---

###### account.deleteAccount

:link: [*Delete the user&#039;s account from the telegram servers*](method/account.deleteAccount)

---

###### account.getAccountTTL

:link: [*Get days to live of account*](method/account.getAccountTTL)

---

###### account.setAccountTTL

:link: [*Set account self\-destruction period*](method/account.setAccountTTL)

---

###### account.sendChangePhoneCode

:link: [*Verify a new phone number to associate to the current account*](method/account.sendChangePhoneCode)

---

###### account.changePhone

:link: [*Change the phone number of the current account*](method/account.changePhone)

---

###### account.updateDeviceLocked

:link: [*When client\-side passcode lock feature is enabled, will not show message texts in incoming PUSH notifications*](method/account.updateDeviceLocked)

---

###### account.getAuthorizations

:link: [*Get logged\-in sessions*](method/account.getAuthorizations)

---

###### account.resetAuthorization

:link: [*Log out an active authorized session by its hash*](method/account.resetAuthorization)

---

###### account.getPassword

:link: [*Obtain configuration for two\-factor authorization with password*](method/account.getPassword)

---

###### account.getPasswordSettings

:link: [*Get private info associated to the password info \(recovery email, telegram passport info &amp; so on\)*](method/account.getPasswordSettings)

---

###### account.updatePasswordSettings

:link: [*Set a new 2FA password*](method/account.updatePasswordSettings)

---

###### account.sendConfirmPhoneCode

:link: [*Send confirmation code to cancel account deletion, for more info click here &raquo;*](method/account.sendConfirmPhoneCode)

---

###### account.confirmPhone

:link: [*Confirm a phone number to cancel account deletion, for more info click here &raquo;*](method/account.confirmPhone)

---

###### account.getTmpPassword

:link: [*Get temporary payment password*](method/account.getTmpPassword)

---

###### account.getWebAuthorizations

:link: [*Get web login widget authorizations*](method/account.getWebAuthorizations)

---

###### account.resetWebAuthorization

:link: [*Log out an active web telegram login session*](method/account.resetWebAuthorization)

---

###### account.resetWebAuthorizations

:link: [*Reset all active web telegram login sessions*](method/account.resetWebAuthorizations)

---

###### account.getAllSecureValues

:link: [*Get all saved Telegram Passport documents, for more info see the passport docs &raquo;*](method/account.getAllSecureValues)

---

###### account.getSecureValue

:link: [*Get saved Telegram Passport document, for more info see the passport docs &raquo;*](method/account.getSecureValue)

---

###### account.saveSecureValue

:link: [*Securely save Telegram Passport document, for more info see the passport docs &raquo;*](method/account.saveSecureValue)

---

###### account.deleteSecureValue

:link: [*Delete stored Telegram Passport documents, for more info see the passport docs &raquo;*](method/account.deleteSecureValue)

---

###### account.getAuthorizationForm

:link: [*Returns a Telegram Passport authorization form for sharing data with a service*](method/account.getAuthorizationForm)

---

###### account.acceptAuthorization

:link: [*Sends a Telegram Passport authorization form, effectively sharing data with the service*](method/account.acceptAuthorization)

---

###### account.sendVerifyPhoneCode

:link: [*Send the verification phone code for telegram passport*](method/account.sendVerifyPhoneCode)

---

###### account.verifyPhone

:link: [*Verify a phone number for telegram passport*](method/account.verifyPhone)

---

###### account.sendVerifyEmailCode

:link: [*Send an email verification code*](method/account.sendVerifyEmailCode)

---

###### account.verifyEmail

:link: [*Verify an email address*](method/account.verifyEmail)

---

###### account.initTakeoutSession

:link: [*Initialize a takeout session, see here &raquo; for more info*](method/account.initTakeoutSession)

---

###### account.finishTakeoutSession

:link: [*Terminate a takeout session, see here &raquo; for more info*](method/account.finishTakeoutSession)

---

###### account.confirmPasswordEmail

:link: [*Verify an email to use as 2FA recovery method*](method/account.confirmPasswordEmail)

---

###### account.resendPasswordEmail

:link: [*Resend the code to verify an email to use as 2FA recovery method*](method/account.resendPasswordEmail)

---

###### account.cancelPasswordEmail

:link: [*Cancel the code that was sent to verify an email to use as 2FA recovery method*](method/account.cancelPasswordEmail)

---

###### account.getContactSignUpNotification

:link: [*Whether the user will receive notifications when contacts sign up*](method/account.getContactSignUpNotification)

---

###### account.setContactSignUpNotification

:link: [*Toggle contact sign up notifications*](method/account.setContactSignUpNotification)

---

###### account.getNotifyExceptions

:link: [*Returns list of chats with non\-default notification settings*](method/account.getNotifyExceptions)

---

###### account.getWallPaper

:link: [*Get info about a certain wallpaper*](method/account.getWallPaper)

---

###### account.uploadWallPaper

:link: [*Create and upload a new wallpaper*](method/account.uploadWallPaper)

---

###### account.saveWallPaper

:link: [*Install/uninstall wallpaper*](method/account.saveWallPaper)

---

###### account.installWallPaper

:link: [*Install wallpaper*](method/account.installWallPaper)

---

###### account.resetWallPapers

:link: [*Delete all installed wallpapers, reverting to the default wallpaper set*](method/account.resetWallPapers)

---

###### account.getAutoDownloadSettings

:link: [*Get media autodownload settings*](method/account.getAutoDownloadSettings)

---

###### account.saveAutoDownloadSettings

:link: [*Change media autodownload settings*](method/account.saveAutoDownloadSettings)

---

###### account.uploadTheme

:link: [*Upload theme*](method/account.uploadTheme)

---

###### account.createTheme

:link: [*Create a theme*](method/account.createTheme)

---

###### account.updateTheme

:link: [*Update theme*](method/account.updateTheme)

---

###### account.saveTheme

:link: [*Save a theme*](method/account.saveTheme)

---

###### account.installTheme

:link: [*Install a theme*](method/account.installTheme)

---

###### account.getTheme

:link: [*Get theme information*](method/account.getTheme)

---

###### account.getThemes

:link: [*Get installed themes*](method/account.getThemes)

---

###### account.setContentSettings

:link: [*Set sensitive content settings \(for viewing or hiding NSFW content\)*](method/account.setContentSettings)

---

###### account.getContentSettings

:link: [*Get sensitive content settings*](method/account.getContentSettings)

---

###### account.getMultiWallPapers

:link: [*Get info about multiple wallpapers*](method/account.getMultiWallPapers)

---

###### account.getGlobalPrivacySettings

:link: [*Get global privacy settings*](method/account.getGlobalPrivacySettings)

---

###### account.setGlobalPrivacySettings

:link: [*Set global privacy settings*](method/account.setGlobalPrivacySettings)

---

###### account.reportProfilePhoto

:link: [*Report a profile photo of a dialog*](method/account.reportProfilePhoto)

---

###### account.resetPassword

:link: [*Initiate a 2FA password reset: can only be used if the user is already logged\-in, see here for more info &raquo;*](method/account.resetPassword)

---

###### account.declinePasswordReset

:link: [*Abort a pending 2FA password reset, see here for more info &raquo;*](method/account.declinePasswordReset)

---

###### account.getChatThemes

:link: [*Get all available chat themes &raquo;*](method/account.getChatThemes)

---

###### account.setAuthorizationTTL

:link: [*Set time\-to\-live of current session*](method/account.setAuthorizationTTL)

---

###### account.changeAuthorizationSettings

:link: [*Change settings related to a session*](method/account.changeAuthorizationSettings)

---

###### account.getSavedRingtones

:link: [*Fetch saved notification sounds*](method/account.getSavedRingtones)

---

###### account.saveRingtone

:link: [*Save or remove saved notification sound*](method/account.saveRingtone)

---

###### account.uploadRingtone

:link: [*Upload notification sound, use account\.saveRingtone to convert it and add it to the list of saved notification sounds*](method/account.uploadRingtone)

---

###### account.updateEmojiStatus

:link: [*Set an emoji status*](method/account.updateEmojiStatus)

---

###### account.getDefaultEmojiStatuses

:link: [*Get a list of default suggested emoji statuses*](method/account.getDefaultEmojiStatuses)

---

###### account.getRecentEmojiStatuses

:link: [*Get recently used emoji statuses*](method/account.getRecentEmojiStatuses)

---

###### account.clearRecentEmojiStatuses

:link: [*Clears list of recently used emoji statuses*](method/account.clearRecentEmojiStatuses)

---

###### account.reorderUsernames

:link: [*Reorder usernames associated with the currently logged\-in user*](method/account.reorderUsernames)

---

###### account.toggleUsername

:link: [*Activate or deactivate a purchased fragment\.com username associated to the currently logged\-in user*](method/account.toggleUsername)

---

###### account.getDefaultProfilePhotoEmojis

:link: [*Get a set of suggested custom emoji stickers that can be used as profile picture*](method/account.getDefaultProfilePhotoEmojis)

---

###### account.getDefaultGroupPhotoEmojis

:link: [*Get a set of suggested custom emoji stickers that can be used as group picture*](method/account.getDefaultGroupPhotoEmojis)

---

###### account.getAutoSaveSettings

:link: [*Get autosave settings*](method/account.getAutoSaveSettings)

---

###### account.saveAutoSaveSettings

:link: [*Modify autosave settings*](method/account.saveAutoSaveSettings)

---

###### account.deleteAutoSaveExceptions

:link: [*Clear all peer\-specific autosave settings*](method/account.deleteAutoSaveExceptions)

---

###### account.invalidateSignInCodes

:link: [*Invalidate the specified login codes, see here &raquo; for more info*](method/account.invalidateSignInCodes)

---

###### account.updateColor

:link: [*Update the accent color and background custom emoji &raquo; of the current account*](method/account.updateColor)

---

###### account.getDefaultBackgroundEmojis

:link: [*Get a set of suggested custom emoji stickers that can be used in an accent color pattern*](method/account.getDefaultBackgroundEmojis)

---

###### account.getChannelDefaultEmojiStatuses

:link: [*Get a list of default suggested channel emoji statuses*](method/account.getChannelDefaultEmojiStatuses)

---

###### account.getChannelRestrictedStatusEmojis

:link: [*Returns fetch the full list of custom emoji IDs &raquo; that cannot be used in channel emoji statuses &raquo;*](method/account.getChannelRestrictedStatusEmojis)

---

###### account.updateBusinessWorkHours

:link: [*Specify a set of Telegram Business opening hours\.
This info will be contained in userFull\.business\_work\_hours*](method/account.updateBusinessWorkHours)

---

###### account.updateBusinessLocation

:link: [*Businesses &raquo; may advertise their location using this method, see here &raquo; for more info*](method/account.updateBusinessLocation)

---

###### account.updateBusinessGreetingMessage

:link: [*Set a list of Telegram Business greeting messages*](method/account.updateBusinessGreetingMessage)

---

###### account.updateBusinessAwayMessage

:link: [*Set a list of Telegram Business away messages*](method/account.updateBusinessAwayMessage)

---

###### account.updateConnectedBot

:link: [*Connect a business bot &raquo; to the current account, or to change the current connection settings*](method/account.updateConnectedBot)

---

###### account.getConnectedBots

:link: [*List all currently connected business bots &raquo;*](method/account.getConnectedBots)

---

###### account.getBotBusinessConnection

:link: [*Bots may invoke this method to re\-fetch the updateBotBusinessConnect constructor associated with a specific business connection\_id, see here &raquo; for more info on connected business bots\.
This is needed for example for freshly logged in bots that are receiving some updateBotNewBusinessMessage, etc\. updates because some users have already connected to the bot before it could login\.
In this case, the bot is receiving messages from the business connection, but it hasn&#039;t cached the associated updateBotBusinessConnect with info about the connection \(can it reply to messages? etc\.\) yet, and cannot receive the old ones because they were sent when the bot wasn&#039;t logged into the session yet\.
This method can be used to fetch info about a not\-yet\-cached business connection, and should not be invoked if the info is already cached or to fetch changes, as eventual changes will automatically be sent as new updateBotBusinessConnect updates to the bot using the usual update delivery methods &raquo;*](method/account.getBotBusinessConnection)

---

###### account.updateBusinessIntro

:link: [*Set or remove the Telegram Business introduction &raquo;*](method/account.updateBusinessIntro)

---

###### account.toggleConnectedBotPaused

:link: [*Pause or unpause a specific chat, temporarily disconnecting it from all business bots &raquo;*](method/account.toggleConnectedBotPaused)

---

###### account.disablePeerConnectedBot

:link: [*Permanently disconnect a specific chat from all business bots &raquo; \(equivalent to specifying it in recipients\.exclude\_users during initial configuration with account\.updateConnectedBot &raquo;\); to reconnect of a chat disconnected using this method the user must reconnect the entire bot by invoking account\.updateConnectedBot &raquo;*](method/account.disablePeerConnectedBot)

---

###### account.updateBirthday

:link: [*Update our birthday, see here &raquo; for more info*](method/account.updateBirthday)

---

###### account.createBusinessChatLink

:link: [*Create a business chat deep link &raquo;*](method/account.createBusinessChatLink)

---

###### account.editBusinessChatLink

:link: [*Edit a created business chat deep link &raquo;*](method/account.editBusinessChatLink)

---

###### account.deleteBusinessChatLink

:link: [*Delete a business chat deep link &raquo;*](method/account.deleteBusinessChatLink)

---

###### account.getBusinessChatLinks

:link: [*List all created business chat deep links &raquo;*](method/account.getBusinessChatLinks)

---

###### account.resolveBusinessChatLink

:link: [*Resolve a business chat deep link &raquo;*](method/account.resolveBusinessChatLink)

---

###### account.updatePersonalChannel

:link: [*Associate \(or remove\) a personal channel &raquo;, that will be listed on our personal profile page &raquo;*](method/account.updatePersonalChannel)

---

###### account.toggleSponsoredMessages

:link: [*Disable or re\-enable Telegram ads for the current Premium account*](method/account.toggleSponsoredMessages)

---

###### account.getReactionsNotifySettings

:link: [*Get the current reaction notification settings &raquo;*](method/account.getReactionsNotifySettings)

---

###### account.setReactionsNotifySettings

:link: [*Change the reaction notification settings &raquo;*](method/account.setReactionsNotifySettings)

---

###### account.getCollectibleEmojiStatuses

:link: [*NOTHING*](method/account.getCollectibleEmojiStatuses)

---

###### account.getPaidMessagesRevenue

:link: [*NOTHING*](method/account.getPaidMessagesRevenue)

---

###### account.toggleNoPaidMessagesException

:link: [*NOTHING*](method/account.toggleNoPaidMessagesException)

---

###### users.getUsers

:link: [*Returns basic user info according to their identifiers*](method/users.getUsers)

---

###### users.getFullUser

:link: [*Returns extended user info by ID*](method/users.getFullUser)

---

###### users.setSecureValueErrors

:link: [*Notify the user that the sent passport data contains some errors The user will not be able to re\-submit their Passport data to you until the errors are fixed \(the contents of the field for which you returned the error must change\)*](method/users.setSecureValueErrors)

---

###### users.getRequirementsToContact

:link: [*NOTHING*](method/users.getRequirementsToContact)

---

###### contacts.getContactIDs

:link: [*Get the telegram IDs of all contacts\.
Returns an array of Telegram user IDs for all contacts \(0 if a contact does not have an associated Telegram account or have hidden their account using privacy settings\)*](method/contacts.getContactIDs)

---

###### contacts.getStatuses

:link: [*Use this method to obtain the online statuses of all contacts with an accessible Telegram account*](method/contacts.getStatuses)

---

###### contacts.getContacts

:link: [*Returns the current user&#039;s contact list*](method/contacts.getContacts)

---

###### contacts.importContacts

:link: [*Imports contacts: saves a full list on the server, adds already registered contacts to the contact list, returns added contacts and their info*](method/contacts.importContacts)

---

###### contacts.deleteContacts

:link: [*Deletes several contacts from the list*](method/contacts.deleteContacts)

---

###### contacts.deleteByPhones

:link: [*Delete contacts by phone number*](method/contacts.deleteByPhones)

---

###### contacts.block

:link: [*Adds a peer to a blocklist, see here &raquo; for more info*](method/contacts.block)

---

###### contacts.unblock

:link: [*Deletes a peer from a blocklist, see here &raquo; for more info*](method/contacts.unblock)

---

###### contacts.getBlocked

:link: [*Returns the list of blocked users*](method/contacts.getBlocked)

---

###### contacts.search

:link: [*Returns users found by username substring*](method/contacts.search)

---

###### contacts.resolveUsername

:link: [*Resolve a @username to get peer info*](method/contacts.resolveUsername)

---

###### contacts.getTopPeers

:link: [*Get most used peers*](method/contacts.getTopPeers)

---

###### contacts.resetTopPeerRating

:link: [*Reset rating of top peer*](method/contacts.resetTopPeerRating)

---

###### contacts.resetSaved

:link: [*Removes all contacts without an associated Telegram account*](method/contacts.resetSaved)

---

###### contacts.getSaved

:link: [*Get all contacts, requires a takeout session, see here &raquo; for more info*](method/contacts.getSaved)

---

###### contacts.toggleTopPeers

:link: [*Enable/disable top peers*](method/contacts.toggleTopPeers)

---

###### contacts.addContact

:link: [*Add an existing telegram user as contact*](method/contacts.addContact)

---

###### contacts.acceptContact

:link: [*If the add contact action bar is active, add that user as contact*](method/contacts.acceptContact)

---

###### contacts.getLocated

:link: [*Get users and geochats near you, see here &raquo; for more info*](method/contacts.getLocated)

---

###### contacts.blockFromReplies

:link: [*Stop getting notifications about discussion replies of a certain user in @replies*](method/contacts.blockFromReplies)

---

###### contacts.resolvePhone

:link: [*Resolve a phone number to get user info, if their privacy settings allow it*](method/contacts.resolvePhone)

---

###### contacts.exportContactToken

:link: [*Generates a temporary profile link for the currently logged\-in user*](method/contacts.exportContactToken)

---

###### contacts.importContactToken

:link: [*Obtain user info from a temporary profile link*](method/contacts.importContactToken)

---

###### contacts.editCloseFriends

:link: [*Edit the close friends list, see here &raquo; for more info*](method/contacts.editCloseFriends)

---

###### contacts.setBlocked

:link: [*Replace the contents of an entire blocklist, see here for more info &raquo;*](method/contacts.setBlocked)

---

###### contacts.getBirthdays

:link: [*Fetch all users with birthdays that fall within \+1/\-1 days, relative to the current day: this method should be invoked by clients every 6\-8 hours, and if the result is non\-empty, it should be used to appropriately update locally cached birthday information in user\.birthday*](method/contacts.getBirthdays)

---

###### contacts.getSponsoredPeers

:link: [*NOTHING*](method/contacts.getSponsoredPeers)

---

###### messages.getMessages

:link: [*Returns the list of messages by their IDs*](method/messages.getMessages)

---

###### messages.getDialogs

:link: [*Returns the current user dialog list*](method/messages.getDialogs)

---

###### messages.getHistory

:link: [*Returns the conversation history with one interlocutor / within a chat*](method/messages.getHistory)

---

###### messages.search

:link: [*Search for messages*](method/messages.search)

---

###### messages.readHistory

:link: [*Marks message history as read*](method/messages.readHistory)

---

###### messages.deleteHistory

:link: [*Deletes communication history*](method/messages.deleteHistory)

---

###### messages.deleteMessages

:link: [*Deletes messages by their identifiers*](method/messages.deleteMessages)

---

###### messages.receivedMessages

:link: [*Confirms receipt of messages by a client, cancels PUSH\-notification sending*](method/messages.receivedMessages)

---

###### messages.setTyping

:link: [*Sends a current user typing event \(see SendMessageAction for all event types\) to a conversation partner or group*](method/messages.setTyping)

---

###### messages.sendMessage

:link: [*Sends a message to a chat*](method/messages.sendMessage)

---

###### messages.sendMedia

:link: [*Send a media*](method/messages.sendMedia)

---

###### messages.forwardMessages

:link: [*Forwards messages by their IDs*](method/messages.forwardMessages)

---

###### messages.reportSpam

:link: [*Report a new incoming chat for spam, if the peer settings of the chat allow us to do that*](method/messages.reportSpam)

---

###### messages.getPeerSettings

:link: [*Get peer settings*](method/messages.getPeerSettings)

---

###### messages.report

:link: [*Report a message in a chat for violation of telegram&#039;s Terms of Service*](method/messages.report)

---

###### messages.getChats

:link: [*Returns chat basic info on their IDs*](method/messages.getChats)

---

###### messages.getFullChat

:link: [*Get full info about a basic group*](method/messages.getFullChat)

---

###### messages.editChatTitle

:link: [*Changes chat name and sends a service message on it*](method/messages.editChatTitle)

---

###### messages.editChatPhoto

:link: [*Changes chat photo and sends a service message on it*](method/messages.editChatPhoto)

---

###### messages.addChatUser

:link: [*Adds a user to a chat and sends a service message on it*](method/messages.addChatUser)

---

###### messages.deleteChatUser

:link: [*Deletes a user from a chat and sends a service message on it*](method/messages.deleteChatUser)

---

###### messages.createChat

:link: [*Creates a new chat*](method/messages.createChat)

---

###### messages.getDhConfig

:link: [*Returns configuration parameters for Diffie\-Hellman key generation\. Can also return a random sequence of bytes of required length*](method/messages.getDhConfig)

---

###### messages.requestEncryption

:link: [*Sends a request to start a secret chat to the user*](method/messages.requestEncryption)

---

###### messages.acceptEncryption

:link: [*Confirms creation of a secret chat*](method/messages.acceptEncryption)

---

###### messages.discardEncryption

:link: [*Cancels a request for creation and/or delete info on secret chat*](method/messages.discardEncryption)

---

###### messages.setEncryptedTyping

:link: [*Send typing event by the current user to a secret chat*](method/messages.setEncryptedTyping)

---

###### messages.readEncryptedHistory

:link: [*Marks message history within a secret chat as read*](method/messages.readEncryptedHistory)

---

###### messages.sendEncrypted

:link: [*Sends a text message to a secret chat*](method/messages.sendEncrypted)

---

###### messages.sendEncryptedFile

:link: [*Sends a message with a file attachment to a secret chat*](method/messages.sendEncryptedFile)

---

###### messages.sendEncryptedService

:link: [*Sends a service message to a secret chat*](method/messages.sendEncryptedService)

---

###### messages.receivedQueue

:link: [*Confirms receipt of messages in a secret chat by client, cancels push notifications\.
The method returns a list of random\_ids of messages for which push notifications were cancelled*](method/messages.receivedQueue)

---

###### messages.reportEncryptedSpam

:link: [*Report a secret chat for spam*](method/messages.reportEncryptedSpam)

---

###### messages.readMessageContents

:link: [*Notifies the sender about the recipient having listened a voice message or watched a video*](method/messages.readMessageContents)

---

###### messages.getStickers

:link: [*Get stickers by emoji*](method/messages.getStickers)

---

###### messages.getAllStickers

:link: [*Get all installed stickers*](method/messages.getAllStickers)

---

###### messages.getWebPagePreview

:link: [*Get preview of webpage*](method/messages.getWebPagePreview)

---

###### messages.exportChatInvite

:link: [*Export an invite link for a chat*](method/messages.exportChatInvite)

---

###### messages.checkChatInvite

:link: [*Check the validity of a chat invite link and get basic info about it*](method/messages.checkChatInvite)

---

###### messages.importChatInvite

:link: [*Import a chat invite and join a private chat/supergroup/channel*](method/messages.importChatInvite)

---

###### messages.getStickerSet

:link: [*Get info about a stickerset*](method/messages.getStickerSet)

---

###### messages.installStickerSet

:link: [*Install a stickerset*](method/messages.installStickerSet)

---

###### messages.uninstallStickerSet

:link: [*Uninstall a stickerset*](method/messages.uninstallStickerSet)

---

###### messages.startBot

:link: [*Start a conversation with a bot using a deep linking parameter*](method/messages.startBot)

---

###### messages.getMessagesViews

:link: [*Get and increase the view counter of a message sent or forwarded from a channel*](method/messages.getMessagesViews)

---

###### messages.editChatAdmin

:link: [*Make a user admin in a basic group*](method/messages.editChatAdmin)

---

###### messages.migrateChat

:link: [*Turn a basic group into a supergroup*](method/messages.migrateChat)

---

###### messages.searchGlobal

:link: [*Search for messages and peers globally*](method/messages.searchGlobal)

---

###### messages.reorderStickerSets

:link: [*Reorder installed stickersets*](method/messages.reorderStickerSets)

---

###### messages.getDocumentByHash

:link: [*Get a document by its SHA256 hash, mainly used for gifs*](method/messages.getDocumentByHash)

---

###### messages.getSavedGifs

:link: [*Get saved GIFs*](method/messages.getSavedGifs)

---

###### messages.saveGif

:link: [*Add GIF to saved gifs list*](method/messages.saveGif)

---

###### messages.getInlineBotResults

:link: [*Query an inline bot*](method/messages.getInlineBotResults)

---

###### messages.setInlineBotResults

:link: [*Answer an inline query, for bots only*](method/messages.setInlineBotResults)

---

###### messages.sendInlineBotResult

:link: [*Send a result obtained using messages\.getInlineBotResults*](method/messages.sendInlineBotResult)

---

###### messages.getMessageEditData

:link: [*Find out if a media message&#039;s caption can be edited*](method/messages.getMessageEditData)

---

###### messages.editMessage

:link: [*Edit message*](method/messages.editMessage)

---

###### messages.editInlineBotMessage

:link: [*Edit an inline bot message*](method/messages.editInlineBotMessage)

---

###### messages.getBotCallbackAnswer

:link: [*Press an inline callback button and get a callback answer from the bot*](method/messages.getBotCallbackAnswer)

---

###### messages.setBotCallbackAnswer

:link: [*Set the callback answer to a user button press \(bots only\)*](method/messages.setBotCallbackAnswer)

---

###### messages.getPeerDialogs

:link: [*Get dialog info of specified peers*](method/messages.getPeerDialogs)

---

###### messages.saveDraft

:link: [*Save a message draft associated to a chat*](method/messages.saveDraft)

---

###### messages.getAllDrafts

:link: [*Return all message drafts\.
Returns all the latest updateDraftMessage updates related to all chats with drafts*](method/messages.getAllDrafts)

---

###### messages.getFeaturedStickers

:link: [*Get featured stickers*](method/messages.getFeaturedStickers)

---

###### messages.readFeaturedStickers

:link: [*Mark new featured stickers as read*](method/messages.readFeaturedStickers)

---

###### messages.getRecentStickers

:link: [*Get recent stickers*](method/messages.getRecentStickers)

---

###### messages.saveRecentSticker

:link: [*Add/remove sticker from recent stickers list*](method/messages.saveRecentSticker)

---

###### messages.clearRecentStickers

:link: [*Clear recent stickers*](method/messages.clearRecentStickers)

---

###### messages.getArchivedStickers

:link: [*Get all archived stickers*](method/messages.getArchivedStickers)

---

###### messages.getMaskStickers

:link: [*Get installed mask stickers*](method/messages.getMaskStickers)

---

###### messages.getAttachedStickers

:link: [*Get stickers attached to a photo or video*](method/messages.getAttachedStickers)

---

###### messages.setGameScore

:link: [*Use this method to set the score of the specified user in a game sent as a normal message \(bots only\)*](method/messages.setGameScore)

---

###### messages.setInlineGameScore

:link: [*Use this method to set the score of the specified user in a game sent as an inline message \(bots only\)*](method/messages.setInlineGameScore)

---

###### messages.getGameHighScores

:link: [*Get highscores of a game*](method/messages.getGameHighScores)

---

###### messages.getInlineGameHighScores

:link: [*Get highscores of a game sent using an inline bot*](method/messages.getInlineGameHighScores)

---

###### messages.getCommonChats

:link: [*Get chats in common with a user*](method/messages.getCommonChats)

---

###### messages.getWebPage

:link: [*Get instant view page*](method/messages.getWebPage)

---

###### messages.toggleDialogPin

:link: [*Pin/unpin a dialog*](method/messages.toggleDialogPin)

---

###### messages.reorderPinnedDialogs

:link: [*Reorder pinned dialogs*](method/messages.reorderPinnedDialogs)

---

###### messages.getPinnedDialogs

:link: [*Get pinned dialogs*](method/messages.getPinnedDialogs)

---

###### messages.setBotShippingResults

:link: [*If you sent an invoice requesting a shipping address and the parameter is\_flexible was specified, the bot will receive an updateBotShippingQuery update\. Use this method to reply to shipping queries*](method/messages.setBotShippingResults)

---

###### messages.setBotPrecheckoutResults

:link: [*Once the user has confirmed their payment and shipping details, the bot receives an updateBotPrecheckoutQuery update\.
Use this method to respond to such pre\-checkout queries\.
Note: Telegram must receive an answer within 10 seconds after the pre\-checkout query was sent*](method/messages.setBotPrecheckoutResults)

---

###### messages.uploadMedia

:link: [*Upload a file and associate it to a chat \(without actually sending it to the chat\)*](method/messages.uploadMedia)

---

###### messages.sendScreenshotNotification

:link: [*Notify the other user in a private chat that a screenshot of the chat was taken*](method/messages.sendScreenshotNotification)

---

###### messages.getFavedStickers

:link: [*Get faved stickers*](method/messages.getFavedStickers)

---

###### messages.faveSticker

:link: [*Mark or unmark a sticker as favorite*](method/messages.faveSticker)

---

###### messages.getUnreadMentions

:link: [*Get unread messages where we were mentioned*](method/messages.getUnreadMentions)

---

###### messages.readMentions

:link: [*Mark mentions as read*](method/messages.readMentions)

---

###### messages.getRecentLocations

:link: [*Get live location history of a certain user*](method/messages.getRecentLocations)

---

###### messages.sendMultiMedia

:link: [*Send an album or grouped media*](method/messages.sendMultiMedia)

---

###### messages.uploadEncryptedFile

:link: [*Upload encrypted file and associate it to a secret chat*](method/messages.uploadEncryptedFile)

---

###### messages.searchStickerSets

:link: [*Search for stickersets*](method/messages.searchStickerSets)

---

###### messages.getSplitRanges

:link: [*Get message ranges for saving the user&#039;s chat history*](method/messages.getSplitRanges)

---

###### messages.markDialogUnread

:link: [*Manually mark dialog as unread*](method/messages.markDialogUnread)

---

###### messages.getDialogUnreadMarks

:link: [*Get dialogs manually marked as unread*](method/messages.getDialogUnreadMarks)

---

###### messages.clearAllDrafts

:link: [*Clear all drafts*](method/messages.clearAllDrafts)

---

###### messages.updatePinnedMessage

:link: [*Pin a message*](method/messages.updatePinnedMessage)

---

###### messages.sendVote

:link: [*Vote in a poll*](method/messages.sendVote)

---

###### messages.getPollResults

:link: [*Get poll results*](method/messages.getPollResults)

---

###### messages.getOnlines

:link: [*Get count of online users in a chat*](method/messages.getOnlines)

---

###### messages.editChatAbout

:link: [*Edit the description of a group/supergroup/channel*](method/messages.editChatAbout)

---

###### messages.editChatDefaultBannedRights

:link: [*Edit the default banned rights of a channel/supergroup/group*](method/messages.editChatDefaultBannedRights)

---

###### messages.getEmojiKeywords

:link: [*Get localized emoji keywords &raquo;*](method/messages.getEmojiKeywords)

---

###### messages.getEmojiKeywordsDifference

:link: [*Get changed emoji keywords &raquo;*](method/messages.getEmojiKeywordsDifference)

---

###### messages.getEmojiKeywordsLanguages

:link: [*Obtain a list of related languages that must be used when fetching emoji keyword lists &raquo;*](method/messages.getEmojiKeywordsLanguages)

---

###### messages.getEmojiURL

:link: [*Returns an HTTP URL which can be used to automatically log in into translation platform and suggest new emoji keywords &raquo;\. The URL will be valid for 30 seconds after generation*](method/messages.getEmojiURL)

---

###### messages.getSearchCounters

:link: [*Get the number of results that would be found by a messages\.search call with the same parameters*](method/messages.getSearchCounters)

---

###### messages.requestUrlAuth

:link: [*Get more info about a Seamless Telegram Login authorization request, for more info click here &raquo;*](method/messages.requestUrlAuth)

---

###### messages.acceptUrlAuth

:link: [*Use this to accept a Seamless Telegram Login authorization request, for more info click here &raquo;*](method/messages.acceptUrlAuth)

---

###### messages.hidePeerSettingsBar

:link: [*Should be called after the user hides the report spam/add as contact bar of a new chat, effectively prevents the user from executing the actions specified in the action bar &raquo;*](method/messages.hidePeerSettingsBar)

---

###### messages.getScheduledHistory

:link: [*Get scheduled messages*](method/messages.getScheduledHistory)

---

###### messages.getScheduledMessages

:link: [*Get scheduled messages*](method/messages.getScheduledMessages)

---

###### messages.sendScheduledMessages

:link: [*Send scheduled messages right away*](method/messages.sendScheduledMessages)

---

###### messages.deleteScheduledMessages

:link: [*Delete scheduled messages*](method/messages.deleteScheduledMessages)

---

###### messages.getPollVotes

:link: [*Get poll results for non\-anonymous polls*](method/messages.getPollVotes)

---

###### messages.toggleStickerSets

:link: [*Apply changes to multiple stickersets*](method/messages.toggleStickerSets)

---

###### messages.getDialogFilters

:link: [*Get folders*](method/messages.getDialogFilters)

---

###### messages.getSuggestedDialogFilters

:link: [*Get suggested folders*](method/messages.getSuggestedDialogFilters)

---

###### messages.updateDialogFilter

:link: [*Update folder*](method/messages.updateDialogFilter)

---

###### messages.updateDialogFiltersOrder

:link: [*Reorder folders*](method/messages.updateDialogFiltersOrder)

---

###### messages.getOldFeaturedStickers

:link: [*Method for fetching previously featured stickers*](method/messages.getOldFeaturedStickers)

---

###### messages.getReplies

:link: [*Get messages in a reply thread*](method/messages.getReplies)

---

###### messages.getDiscussionMessage

:link: [*Get discussion message from the associated discussion group of a channel to show it on top of the comment section, without actually joining the group*](method/messages.getDiscussionMessage)

---

###### messages.readDiscussion

:link: [*Mark a thread as read*](method/messages.readDiscussion)

---

###### messages.unpinAllMessages

:link: [*Unpin all pinned messages*](method/messages.unpinAllMessages)

---

###### messages.deleteChat

:link: [*Delete a chat*](method/messages.deleteChat)

---

###### messages.deletePhoneCallHistory

:link: [*Delete the entire phone call history*](method/messages.deletePhoneCallHistory)

---

###### messages.checkHistoryImport

:link: [*Obtains information about a chat export file, generated by a foreign chat app, click here for more info about imported chats &raquo;*](method/messages.checkHistoryImport)

---

###### messages.initHistoryImport

:link: [*Import chat history from a foreign chat app into a specific Telegram chat, click here for more info about imported chats &raquo;*](method/messages.initHistoryImport)

---

###### messages.uploadImportedMedia

:link: [*Upload a media file associated with an imported chat, click here for more info &raquo;*](method/messages.uploadImportedMedia)

---

###### messages.startHistoryImport

:link: [*Complete the history import process, importing all messages into the chat\.
To be called only after initializing the import with messages\.initHistoryImport and uploading all files using messages\.uploadImportedMedia*](method/messages.startHistoryImport)

---

###### messages.getExportedChatInvites

:link: [*Get info about the chat invites of a specific chat*](method/messages.getExportedChatInvites)

---

###### messages.getExportedChatInvite

:link: [*Get info about a chat invite*](method/messages.getExportedChatInvite)

---

###### messages.editExportedChatInvite

:link: [*Edit an exported chat invite*](method/messages.editExportedChatInvite)

---

###### messages.deleteRevokedExportedChatInvites

:link: [*Delete all revoked chat invites*](method/messages.deleteRevokedExportedChatInvites)

---

###### messages.deleteExportedChatInvite

:link: [*Delete a chat invite*](method/messages.deleteExportedChatInvite)

---

###### messages.getAdminsWithInvites

:link: [*Get info about chat invites generated by admins*](method/messages.getAdminsWithInvites)

---

###### messages.getChatInviteImporters

:link: [*Get info about the users that joined the chat using a specific chat invite*](method/messages.getChatInviteImporters)

---

###### messages.setHistoryTTL

:link: [*Set maximum Time\-To\-Live of all messages in the specified chat*](method/messages.setHistoryTTL)

---

###### messages.checkHistoryImportPeer

:link: [*Check whether chat history exported from another chat app can be imported into a specific Telegram chat, click here for more info &raquo;*](method/messages.checkHistoryImportPeer)

---

###### messages.setChatTheme

:link: [*Change the chat theme of a certain chat*](method/messages.setChatTheme)

---

###### messages.getMessageReadParticipants

:link: [*Get which users read a specific message: only available for groups and supergroups with less than chat\_read\_mark\_size\_threshold members, read receipts will be stored for chat\_read\_mark\_expire\_period seconds after the message was sent, see client configuration for more info &raquo;*](method/messages.getMessageReadParticipants)

---

###### messages.getSearchResultsCalendar

:link: [*Returns information about the next messages of the specified type in the chat split by days*](method/messages.getSearchResultsCalendar)

---

###### messages.getSearchResultsPositions

:link: [*Returns sparse positions of messages of the specified type in the chat to be used for shared media scroll implementation*](method/messages.getSearchResultsPositions)

---

###### messages.hideChatJoinRequest

:link: [*Dismiss or approve a chat join request related to a specific chat or channel*](method/messages.hideChatJoinRequest)

---

###### messages.hideAllChatJoinRequests

:link: [*Dismiss or approve all join requests related to a specific chat or channel*](method/messages.hideAllChatJoinRequests)

---

###### messages.toggleNoForwards

:link: [*Enable or disable content protection on a channel or chat*](method/messages.toggleNoForwards)

---

###### messages.saveDefaultSendAs

:link: [*Change the default peer that should be used when sending messages, reactions, poll votes to a specific group*](method/messages.saveDefaultSendAs)

---

###### messages.sendReaction

:link: [*React to message*](method/messages.sendReaction)

---

###### messages.getMessagesReactions

:link: [*Get message reactions &raquo;*](method/messages.getMessagesReactions)

---

###### messages.getMessageReactionsList

:link: [*Get message reaction list, along with the sender of each reaction*](method/messages.getMessageReactionsList)

---

###### messages.setChatAvailableReactions

:link: [*Change the set of message reactions &raquo; that can be used in a certain group, supergroup or channel*](method/messages.setChatAvailableReactions)

---

###### messages.getAvailableReactions

:link: [*Obtain available message reactions &raquo;*](method/messages.getAvailableReactions)

---

###### messages.setDefaultReaction

:link: [*Change default emoji reaction to use in the quick reaction menu: the value is synced across devices and can be fetched using help\.getConfig, reactions\_default field*](method/messages.setDefaultReaction)

---

###### messages.translateText

:link: [*Translate a given text*](method/messages.translateText)

---

###### messages.getUnreadReactions

:link: [*Get unread reactions to messages you sent*](method/messages.getUnreadReactions)

---

###### messages.readReactions

:link: [*Mark message reactions &raquo; as read*](method/messages.readReactions)

---

###### messages.searchSentMedia

:link: [*View and search recently sent media\.
This method does not support pagination*](method/messages.searchSentMedia)

---

###### messages.getAttachMenuBots

:link: [*Returns installed attachment menu bot mini apps &raquo;*](method/messages.getAttachMenuBots)

---

###### messages.getAttachMenuBot

:link: [*Returns attachment menu entry for a bot mini app that can be launched from the attachment menu &raquo;*](method/messages.getAttachMenuBot)

---

###### messages.toggleBotInAttachMenu

:link: [*Enable or disable web bot attachment menu &raquo;*](method/messages.toggleBotInAttachMenu)

---

###### messages.requestWebView

:link: [*Open a bot mini app, sending over user information after user confirmation*](method/messages.requestWebView)

---

###### messages.prolongWebView

:link: [*Indicate to the server \(from the user side\) that the user is still using a web app*](method/messages.prolongWebView)

---

###### messages.requestSimpleWebView

:link: [*Open a bot mini app*](method/messages.requestSimpleWebView)

---

###### messages.sendWebViewResultMessage

:link: [*Terminate webview interaction started with messages\.requestWebView, sending the specified message to the chat on behalf of the user*](method/messages.sendWebViewResultMessage)

---

###### messages.sendWebViewData

:link: [*Used by the user to relay data from an opened reply keyboard bot mini app to the bot that owns it*](method/messages.sendWebViewData)

---

###### messages.transcribeAudio

:link: [*Transcribe voice message*](method/messages.transcribeAudio)

---

###### messages.rateTranscribedAudio

:link: [*Rate transcribed voice message*](method/messages.rateTranscribedAudio)

---

###### messages.getCustomEmojiDocuments

:link: [*Fetch custom emoji stickers &raquo;*](method/messages.getCustomEmojiDocuments)

---

###### messages.getEmojiStickers

:link: [*Gets the list of currently installed custom emoji stickersets*](method/messages.getEmojiStickers)

---

###### messages.getFeaturedEmojiStickers

:link: [*Gets featured custom emoji stickersets*](method/messages.getFeaturedEmojiStickers)

---

###### messages.reportReaction

:link: [*Report a message reaction*](method/messages.reportReaction)

---

###### messages.getTopReactions

:link: [*Got popular message reactions*](method/messages.getTopReactions)

---

###### messages.getRecentReactions

:link: [*Get recently used message reactions*](method/messages.getRecentReactions)

---

###### messages.clearRecentReactions

:link: [*Clear recently used message reactions*](method/messages.clearRecentReactions)

---

###### messages.getExtendedMedia

:link: [*Fetch updated information about paid media, see here &raquo; for the full flow*](method/messages.getExtendedMedia)

---

###### messages.setDefaultHistoryTTL

:link: [*Changes the default value of the Time\-To\-Live setting, applied to all new chats*](method/messages.setDefaultHistoryTTL)

---

###### messages.getDefaultHistoryTTL

:link: [*Gets the default value of the Time\-To\-Live setting, applied to all new chats*](method/messages.getDefaultHistoryTTL)

---

###### messages.sendBotRequestedPeer

:link: [*Send one or more chosen peers, as requested by a keyboardButtonRequestPeer button*](method/messages.sendBotRequestedPeer)

---

###### messages.getEmojiGroups

:link: [*Represents a list of emoji categories*](method/messages.getEmojiGroups)

---

###### messages.getEmojiStatusGroups

:link: [*Represents a list of emoji categories, to be used when selecting custom emojis to set as custom emoji status*](method/messages.getEmojiStatusGroups)

---

###### messages.getEmojiProfilePhotoGroups

:link: [*Represents a list of emoji categories, to be used when selecting custom emojis to set as profile picture*](method/messages.getEmojiProfilePhotoGroups)

---

###### messages.searchCustomEmoji

:link: [*Look for custom emojis associated to a UTF8 emoji*](method/messages.searchCustomEmoji)

---

###### messages.togglePeerTranslations

:link: [*Show or hide the real\-time chat translation popup for a certain chat*](method/messages.togglePeerTranslations)

---

###### messages.getBotApp

:link: [*Obtain information about a direct link Mini App*](method/messages.getBotApp)

---

###### messages.requestAppWebView

:link: [*Open a bot mini app from a direct Mini App deep link, sending over user information after user confirmation*](method/messages.requestAppWebView)

---

###### messages.setChatWallPaper

:link: [*Set a custom wallpaper &raquo; in a specific private chat with another user*](method/messages.setChatWallPaper)

---

###### messages.searchEmojiStickerSets

:link: [*Search for custom emoji stickersets &raquo;*](method/messages.searchEmojiStickerSets)

---

###### messages.getSavedDialogs

:link: [*Returns the current saved dialog list, see here &raquo; for more info*](method/messages.getSavedDialogs)

---

###### messages.getSavedHistory

:link: [*Returns saved messages &raquo; forwarded from a specific peer*](method/messages.getSavedHistory)

---

###### messages.deleteSavedHistory

:link: [*Deletes messages forwarded from a specific peer to saved messages &raquo;*](method/messages.deleteSavedHistory)

---

###### messages.getPinnedSavedDialogs

:link: [*Get pinned saved dialogs, see here &raquo; for more info*](method/messages.getPinnedSavedDialogs)

---

###### messages.toggleSavedDialogPin

:link: [*Pin or unpin a saved message dialog &raquo;*](method/messages.toggleSavedDialogPin)

---

###### messages.reorderPinnedSavedDialogs

:link: [*Reorder pinned saved message dialogs &raquo;*](method/messages.reorderPinnedSavedDialogs)

---

###### messages.getSavedReactionTags

:link: [*Fetch the full list of saved message tags created by the user*](method/messages.getSavedReactionTags)

---

###### messages.updateSavedReactionTag

:link: [*Update the description of a saved message tag &raquo;*](method/messages.updateSavedReactionTag)

---

###### messages.getDefaultTagReactions

:link: [*Fetch a default recommended list of saved message tag reactions*](method/messages.getDefaultTagReactions)

---

###### messages.getOutboxReadDate

:link: [*Get the exact read date of one of our messages, sent to a private chat with another user*](method/messages.getOutboxReadDate)

---

###### messages.getQuickReplies

:link: [*Fetch basic info about all existing quick reply shortcuts*](method/messages.getQuickReplies)

---

###### messages.reorderQuickReplies

:link: [*Reorder quick reply shortcuts*](method/messages.reorderQuickReplies)

---

###### messages.checkQuickReplyShortcut

:link: [*Before offering the user the choice to add a message to a quick reply shortcut, to make sure that none of the limits specified here &raquo; were reached*](method/messages.checkQuickReplyShortcut)

---

###### messages.editQuickReplyShortcut

:link: [*Rename a quick reply shortcut\.
This will emit an updateQuickReplies update to other logged\-in sessions*](method/messages.editQuickReplyShortcut)

---

###### messages.deleteQuickReplyShortcut

:link: [*Completely delete a quick reply shortcut\.
This will also emit an updateDeleteQuickReply update to other logged\-in sessions \(and no updateDeleteQuickReplyMessages updates, even if all the messages in the shortcuts are also deleted by this method\)*](method/messages.deleteQuickReplyShortcut)

---

###### messages.getQuickReplyMessages

:link: [*Fetch \(a subset or all\) messages in a quick reply shortcut &raquo;*](method/messages.getQuickReplyMessages)

---

###### messages.sendQuickReplyMessages

:link: [*Send a quick reply shortcut &raquo;*](method/messages.sendQuickReplyMessages)

---

###### messages.deleteQuickReplyMessages

:link: [*Delete one or more messages from a quick reply shortcut\. This will also emit an updateDeleteQuickReplyMessages update*](method/messages.deleteQuickReplyMessages)

---

###### messages.toggleDialogFilterTags

:link: [*Enable or disable folder tags &raquo;*](method/messages.toggleDialogFilterTags)

---

###### messages.getMyStickers

:link: [*Fetch all stickersets &raquo; owned by the current user*](method/messages.getMyStickers)

---

###### messages.getEmojiStickerGroups

:link: [*Represents a list of emoji categories, to be used when choosing a sticker*](method/messages.getEmojiStickerGroups)

---

###### messages.getAvailableEffects

:link: [*Fetch the full list of usable animated message effects &raquo;*](method/messages.getAvailableEffects)

---

###### messages.editFactCheck

:link: [*Edit/create a fact\-check on a message*](method/messages.editFactCheck)

---

###### messages.deleteFactCheck

:link: [*Delete a fact\-check from a message*](method/messages.deleteFactCheck)

---

###### messages.getFactCheck

:link: [*Fetch one or more factchecks, see here &raquo; for the full flow*](method/messages.getFactCheck)

---

###### messages.requestMainWebView

:link: [*Open a Main Mini App*](method/messages.requestMainWebView)

---

###### messages.sendPaidReaction

:link: [*Sends one or more paid Telegram Star reactions &raquo;, transferring Telegram Stars &raquo; to a channel&#039;s balance*](method/messages.sendPaidReaction)

---

###### messages.togglePaidReactionPrivacy

:link: [*Changes the privacy of already sent paid reactions on a specific message*](method/messages.togglePaidReactionPrivacy)

---

###### messages.getPaidReactionPrivacy

:link: [*Fetches an updatePaidReactionPrivacy update with the current default paid reaction privacy, see here &raquo; for more info*](method/messages.getPaidReactionPrivacy)

---

###### messages.viewSponsoredMessage

:link: [*Mark a specific sponsored message &raquo; as read*](method/messages.viewSponsoredMessage)

---

###### messages.clickSponsoredMessage

:link: [*Informs the server that the user has interacted with a sponsored message in one of the ways listed here &raquo;*](method/messages.clickSponsoredMessage)

---

###### messages.reportSponsoredMessage

:link: [*Report a sponsored message &raquo;, see here &raquo; for more info on the full flow*](method/messages.reportSponsoredMessage)

---

###### messages.getSponsoredMessages

:link: [*Get a list of sponsored messages for a peer, see here &raquo; for more info*](method/messages.getSponsoredMessages)

---

###### messages.savePreparedInlineMessage

:link: [*Save a prepared inline message, to be shared by the user of the mini app using a web\_app\_send\_prepared\_message event*](method/messages.savePreparedInlineMessage)

---

###### messages.getPreparedInlineMessage

:link: [*Obtain a prepared inline message generated by a mini app: invoked when handling web\_app\_send\_prepared\_message events*](method/messages.getPreparedInlineMessage)

---

###### messages.searchStickers

:link: [*Search for stickers using AI\-powered keyword search*](method/messages.searchStickers)

---

###### messages.reportMessagesDelivery

:link: [*NOTHING*](method/messages.reportMessagesDelivery)

---

###### messages.getSavedDialogsByID

:link: [*NOTHING*](method/messages.getSavedDialogsByID)

---

###### messages.readSavedHistory

:link: [*NOTHING*](method/messages.readSavedHistory)

---

###### messages.toggleTodoCompleted

:link: [*NOTHING*](method/messages.toggleTodoCompleted)

---

###### messages.appendTodoList

:link: [*NOTHING*](method/messages.appendTodoList)

---

###### messages.toggleSuggestedPostApproval

:link: [*NOTHING*](method/messages.toggleSuggestedPostApproval)

---

###### updates.getState

:link: [*Returns a current state of updates*](method/updates.getState)

---

###### updates.getDifference

:link: [*Get new updates*](method/updates.getDifference)

---

###### updates.getChannelDifference

:link: [*Returns the difference between the current state of updates of a certain channel and transmitted*](method/updates.getChannelDifference)

---

###### photos.updateProfilePhoto

:link: [*Installs a previously uploaded photo as a profile photo*](method/photos.updateProfilePhoto)

---

###### photos.uploadProfilePhoto

:link: [*Updates current user profile photo*](method/photos.uploadProfilePhoto)

---

###### photos.deletePhotos

:link: [*Deletes profile photos\. The method returns a list of successfully deleted photo IDs*](method/photos.deletePhotos)

---

###### photos.getUserPhotos

:link: [*Returns the list of user photos*](method/photos.getUserPhotos)

---

###### photos.uploadContactProfilePhoto

:link: [*Upload a custom profile picture for a contact, or suggest a new profile picture to a contact*](method/photos.uploadContactProfilePhoto)

---

###### upload.saveFilePart

:link: [*Saves a part of file for further sending to one of the methods*](method/upload.saveFilePart)

---

###### upload.getFile

:link: [*Returns content of a whole file or its part*](method/upload.getFile)

---

###### upload.saveBigFilePart

:link: [*Saves a part of a large file \(over 10 MB in size\) to be later passed to one of the methods*](method/upload.saveBigFilePart)

---

###### upload.getWebFile

:link: [*Returns content of a web file, by proxying the request through telegram, see the webfile docs for more info*](method/upload.getWebFile)

---

###### upload.getCdnFile

:link: [*Download a CDN file*](method/upload.getCdnFile)

---

###### upload.reuploadCdnFile

:link: [*Request a reupload of a certain file to a CDN DC*](method/upload.reuploadCdnFile)

---

###### upload.getCdnFileHashes

:link: [*Get SHA256 hashes for verifying downloaded CDN files*](method/upload.getCdnFileHashes)

---

###### upload.getFileHashes

:link: [*Get SHA256 hashes for verifying downloaded files*](method/upload.getFileHashes)

---

###### help.getConfig

:link: [*Returns current configuration, including data center configuration*](method/help.getConfig)

---

###### help.getNearestDc

:link: [*Returns info on data center nearest to the user*](method/help.getNearestDc)

---

###### help.getAppUpdate

:link: [*Returns information on update availability for the current application*](method/help.getAppUpdate)

---

###### help.getInviteText

:link: [*Returns localized text of a text message with an invitation*](method/help.getInviteText)

---

###### help.getSupport

:link: [*Returns the support user for the &quot;ask a question&quot; feature*](method/help.getSupport)

---

###### help.setBotUpdatesStatus

:link: [*Informs the server about the number of pending bot updates if they haven&#039;t been processed for a long time; for bots only*](method/help.setBotUpdatesStatus)

---

###### help.getCdnConfig

:link: [*Get configuration for CDN file downloads*](method/help.getCdnConfig)

---

###### help.getRecentMeUrls

:link: [*Get recently used t\.me links*](method/help.getRecentMeUrls)

---

###### help.getTermsOfServiceUpdate

:link: [*Look for updates of telegram&#039;s terms of service*](method/help.getTermsOfServiceUpdate)

---

###### help.acceptTermsOfService

:link: [*Accept the new terms of service*](method/help.acceptTermsOfService)

---

###### help.getDeepLinkInfo

:link: [*Get info about an unsupported deep link, see here for more info &raquo;*](method/help.getDeepLinkInfo)

---

###### help.getAppConfig

:link: [*Get app\-specific configuration, see client configuration for more info on the result*](method/help.getAppConfig)

---

###### help.saveAppLog

:link: [*Saves logs of application on the server*](method/help.saveAppLog)

---

###### help.getPassportConfig

:link: [*Get passport configuration*](method/help.getPassportConfig)

---

###### help.getSupportName

:link: [*Get localized name of the telegram support user*](method/help.getSupportName)

---

###### help.getUserInfo

:link: [*Can only be used by TSF members to obtain internal information*](method/help.getUserInfo)

---

###### help.editUserInfo

:link: [*Internal use*](method/help.editUserInfo)

---

###### help.getPromoData

:link: [*Get MTProxy/Public Service Announcement information*](method/help.getPromoData)

---

###### help.hidePromoData

:link: [*Hide MTProxy/Public Service Announcement information*](method/help.hidePromoData)

---

###### help.dismissSuggestion

:link: [*Dismiss a suggestion, see here for more info &raquo;*](method/help.dismissSuggestion)

---

###### help.getCountriesList

:link: [*Get name, ISO code, localized name and phone codes/patterns of all available countries*](method/help.getCountriesList)

---

###### help.getPremiumPromo

:link: [*Get Telegram Premium promotion information*](method/help.getPremiumPromo)

---

###### help.getPeerColors

:link: [*Get the set of accent color palettes &raquo; that can be used for message accents*](method/help.getPeerColors)

---

###### help.getPeerProfileColors

:link: [*Get the set of accent color palettes &raquo; that can be used in profile page backgrounds*](method/help.getPeerProfileColors)

---

###### help.getTimezonesList

:link: [*Returns timezone information that may be used elsewhere in the API, such as to set Telegram Business opening hours &raquo;*](method/help.getTimezonesList)

---

###### channels.readHistory

:link: [*Mark channel/supergroup history as read*](method/channels.readHistory)

---

###### channels.deleteMessages

:link: [*Delete messages in a channel/supergroup*](method/channels.deleteMessages)

---

###### channels.reportSpam

:link: [*Reports some messages from a user in a supergroup as spam; requires administrator rights in the supergroup*](method/channels.reportSpam)

---

###### channels.getMessages

:link: [*Get channel/supergroup messages*](method/channels.getMessages)

---

###### channels.getParticipants

:link: [*Get the participants of a supergroup/channel*](method/channels.getParticipants)

---

###### channels.getParticipant

:link: [*Get info about a channel/supergroup participant*](method/channels.getParticipant)

---

###### channels.getChannels

:link: [*Get info about channels/supergroups*](method/channels.getChannels)

---

###### channels.getFullChannel

:link: [*Get full info about a supergroup, gigagroup or channel*](method/channels.getFullChannel)

---

###### channels.createChannel

:link: [*Create a supergroup/channel*](method/channels.createChannel)

---

###### channels.editAdmin

:link: [*Modify the admin rights of a user in a supergroup/channel*](method/channels.editAdmin)

---

###### channels.editTitle

:link: [*Edit the name of a channel/supergroup*](method/channels.editTitle)

---

###### channels.editPhoto

:link: [*Change the photo of a channel/supergroup*](method/channels.editPhoto)

---

###### channels.checkUsername

:link: [*Check if a username is free and can be assigned to a channel/supergroup*](method/channels.checkUsername)

---

###### channels.updateUsername

:link: [*Change or remove the username of a supergroup/channel*](method/channels.updateUsername)

---

###### channels.joinChannel

:link: [*Join a channel/supergroup*](method/channels.joinChannel)

---

###### channels.leaveChannel

:link: [*Leave a channel/supergroup*](method/channels.leaveChannel)

---

###### channels.inviteToChannel

:link: [*Invite users to a channel/supergroup*](method/channels.inviteToChannel)

---

###### channels.deleteChannel

:link: [*Delete a channel/supergroup*](method/channels.deleteChannel)

---

###### channels.exportMessageLink

:link: [*Get link and embed info of a message in a channel/supergroup*](method/channels.exportMessageLink)

---

###### channels.toggleSignatures

:link: [*Enable/disable message signatures in channels*](method/channels.toggleSignatures)

---

###### channels.getAdminedPublicChannels

:link: [*Get channels/supergroups/geogroups we&#039;re admin in\. Usually called when the user exceeds the limit for owned public channels/supergroups/geogroups, and the user is given the choice to remove one of his channels/supergroups/geogroups*](method/channels.getAdminedPublicChannels)

---

###### channels.editBanned

:link: [*Ban/unban/kick a user in a supergroup/channel*](method/channels.editBanned)

---

###### channels.getAdminLog

:link: [*Get the admin log of a channel/supergroup*](method/channels.getAdminLog)

---

###### channels.setStickers

:link: [*Associate a stickerset to the supergroup*](method/channels.setStickers)

---

###### channels.readMessageContents

:link: [*Mark channel/supergroup message contents as read*](method/channels.readMessageContents)

---

###### channels.deleteHistory

:link: [*Delete the history of a supergroup*](method/channels.deleteHistory)

---

###### channels.togglePreHistoryHidden

:link: [*Hide/unhide message history for new channel/supergroup users*](method/channels.togglePreHistoryHidden)

---

###### channels.getLeftChannels

:link: [*Get a list of channels/supergroups we left, requires a takeout session, see here &raquo; for more info*](method/channels.getLeftChannels)

---

###### channels.getGroupsForDiscussion

:link: [*Get all groups that can be used as discussion groups*](method/channels.getGroupsForDiscussion)

---

###### channels.setDiscussionGroup

:link: [*Associate a group to a channel as discussion group for that channel*](method/channels.setDiscussionGroup)

---

###### channels.editCreator

:link: [*Transfer channel ownership*](method/channels.editCreator)

---

###### channels.editLocation

:link: [*Edit location of geogroup, see here &raquo; for more info on geogroups*](method/channels.editLocation)

---

###### channels.toggleSlowMode

:link: [*Toggle supergroup slow mode: if enabled, users will only be able to send one message every seconds seconds*](method/channels.toggleSlowMode)

---

###### channels.getInactiveChannels

:link: [*Get inactive channels and supergroups*](method/channels.getInactiveChannels)

---

###### channels.convertToGigagroup

:link: [*Convert a supergroup to a gigagroup, when requested by channel suggestions*](method/channels.convertToGigagroup)

---

###### channels.getSendAs

:link: [*Obtains a list of peers that can be used to send messages in a specific group*](method/channels.getSendAs)

---

###### channels.deleteParticipantHistory

:link: [*Delete all messages sent by a specific participant of a given supergroup*](method/channels.deleteParticipantHistory)

---

###### channels.toggleJoinToSend

:link: [*Set whether all users should join a discussion group in order to comment on a post &raquo;*](method/channels.toggleJoinToSend)

---

###### channels.toggleJoinRequest

:link: [*Set whether all users should request admin approval to join the group &raquo;*](method/channels.toggleJoinRequest)

---

###### channels.reorderUsernames

:link: [*Reorder active usernames*](method/channels.reorderUsernames)

---

###### channels.toggleUsername

:link: [*Activate or deactivate a purchased fragment\.com username associated to a supergroup or channel we own*](method/channels.toggleUsername)

---

###### channels.deactivateAllUsernames

:link: [*Disable all purchased usernames of a supergroup or channel*](method/channels.deactivateAllUsernames)

---

###### channels.toggleForum

:link: [*Enable or disable forum functionality in a supergroup*](method/channels.toggleForum)

---

###### channels.createForumTopic

:link: [*Create a forum topic; requires manage\_topics rights*](method/channels.createForumTopic)

---

###### channels.getForumTopics

:link: [*Get topics of a forum*](method/channels.getForumTopics)

---

###### channels.getForumTopicsByID

:link: [*Get forum topics by their ID*](method/channels.getForumTopicsByID)

---

###### channels.editForumTopic

:link: [*Edit forum topic; requires manage\_topics rights*](method/channels.editForumTopic)

---

###### channels.updatePinnedForumTopic

:link: [*Pin or unpin forum topics*](method/channels.updatePinnedForumTopic)

---

###### channels.deleteTopicHistory

:link: [*Delete message history of a forum topic*](method/channels.deleteTopicHistory)

---

###### channels.reorderPinnedForumTopics

:link: [*Reorder pinned forum topics*](method/channels.reorderPinnedForumTopics)

---

###### channels.toggleAntiSpam

:link: [*Enable or disable the native antispam system*](method/channels.toggleAntiSpam)

---

###### channels.reportAntiSpamFalsePositive

:link: [*Report a native antispam false positive*](method/channels.reportAntiSpamFalsePositive)

---

###### channels.toggleParticipantsHidden

:link: [*Hide or display the participants list in a supergroup*](method/channels.toggleParticipantsHidden)

---

###### channels.updateColor

:link: [*Update the accent color and background custom emoji &raquo; of a channel*](method/channels.updateColor)

---

###### channels.toggleViewForumAsMessages

:link: [*Users may also choose to display messages from all topics of a forum as if they were sent to a normal group, using a &quot;View as messages&quot; setting in the local client: this setting only affects the current account, and is synced to other logged in sessions using this method*](method/channels.toggleViewForumAsMessages)

---

###### channels.getChannelRecommendations

:link: [*Obtain a list of similarly themed public channels, selected based on similarities in their subscriber bases*](method/channels.getChannelRecommendations)

---

###### channels.updateEmojiStatus

:link: [*Set an emoji status for a channel or supergroup*](method/channels.updateEmojiStatus)

---

###### channels.setBoostsToUnblockRestrictions

:link: [*Admins with ban\_users admin rights &raquo; may allow users that apply a certain number of booosts &raquo; to the group to bypass slow mode &raquo; and other &raquo; supergroup restrictions, see here &raquo; for more info*](method/channels.setBoostsToUnblockRestrictions)

---

###### channels.setEmojiStickers

:link: [*Set a custom emoji stickerset for supergroups\. Only usable after reaching at least the boost level &raquo; specified in the group\_emoji\_stickers\_level\_min &raquo; config parameter*](method/channels.setEmojiStickers)

---

###### channels.restrictSponsoredMessages

:link: [*Disable ads on the specified channel, for all users*](method/channels.restrictSponsoredMessages)

---

###### channels.searchPosts

:link: [*Globally search for posts from public channels &raquo; \(including those we aren&#039;t a member of\) containing a specific hashtag*](method/channels.searchPosts)

---

###### channels.updatePaidMessagesPrice

:link: [*NOTHING*](method/channels.updatePaidMessagesPrice)

---

###### channels.toggleAutotranslation

:link: [*NOTHING*](method/channels.toggleAutotranslation)

---

###### channels.getMessageAuthor

:link: [*NOTHING*](method/channels.getMessageAuthor)

---

###### channels.checkSearchPostsFlood

:link: [*NOTHING*](method/channels.checkSearchPostsFlood)

---

###### bots.sendCustomRequest

:link: [*Sends a custom request; for bots only*](method/bots.sendCustomRequest)

---

###### bots.answerWebhookJSONQuery

:link: [*Answers a custom query; for bots only*](method/bots.answerWebhookJSONQuery)

---

###### bots.setBotCommands

:link: [*Set bot command list*](method/bots.setBotCommands)

---

###### bots.resetBotCommands

:link: [*Clear bot commands for the specified bot scope and language code*](method/bots.resetBotCommands)

---

###### bots.getBotCommands

:link: [*Obtain a list of bot commands for the specified bot scope and language code*](method/bots.getBotCommands)

---

###### bots.setBotMenuButton

:link: [*Sets the menu button action &raquo; for a given user or for all users*](method/bots.setBotMenuButton)

---

###### bots.getBotMenuButton

:link: [*Gets the menu button action for a given user or for all users, previously set using bots\.setBotMenuButton; users can see this information in the botInfo constructor*](method/bots.getBotMenuButton)

---

###### bots.setBotBroadcastDefaultAdminRights

:link: [*Set the default suggested admin rights for bots being added as admins to channels, see here for more info on how to handle them &raquo;*](method/bots.setBotBroadcastDefaultAdminRights)

---

###### bots.setBotGroupDefaultAdminRights

:link: [*Set the default suggested admin rights for bots being added as admins to groups, see here for more info on how to handle them &raquo;*](method/bots.setBotGroupDefaultAdminRights)

---

###### bots.setBotInfo

:link: [*Set localized name, about text and description of a bot \(or of the current account, if called by a bot\)*](method/bots.setBotInfo)

---

###### bots.getBotInfo

:link: [*Get localized name, about text and description of a bot \(or of the current account, if called by a bot\)*](method/bots.getBotInfo)

---

###### bots.reorderUsernames

:link: [*Reorder usernames associated to a bot we own*](method/bots.reorderUsernames)

---

###### bots.toggleUsername

:link: [*Activate or deactivate a purchased fragment\.com username associated to a bot we own*](method/bots.toggleUsername)

---

###### bots.canSendMessage

:link: [*Check whether the specified bot can send us messages*](method/bots.canSendMessage)

---

###### bots.allowSendMessage

:link: [*Allow the specified bot to send us messages*](method/bots.allowSendMessage)

---

###### bots.invokeWebViewCustomMethod

:link: [*Send a custom request from a mini bot app, triggered by a web\_app\_invoke\_custom\_method event &raquo;*](method/bots.invokeWebViewCustomMethod)

---

###### bots.getPopularAppBots

:link: [*Fetch popular Main Mini Apps, to be used in the apps tab of global search &raquo;*](method/bots.getPopularAppBots)

---

###### bots.addPreviewMedia

:link: [*Add a main mini app preview, see here &raquo; for more info*](method/bots.addPreviewMedia)

---

###### bots.editPreviewMedia

:link: [*Edit a main mini app preview, see here &raquo; for more info*](method/bots.editPreviewMedia)

---

###### bots.deletePreviewMedia

:link: [*Delete a main mini app preview, see here &raquo; for more info*](method/bots.deletePreviewMedia)

---

###### bots.reorderPreviewMedias

:link: [*Reorder a main mini app previews, see here &raquo; for more info*](method/bots.reorderPreviewMedias)

---

###### bots.getPreviewInfo

:link: [*Bot owners only, fetch main mini app preview information, see here &raquo; for more info*](method/bots.getPreviewInfo)

---

###### bots.getPreviewMedias

:link: [*Fetch main mini app previews, see here &raquo; for more info*](method/bots.getPreviewMedias)

---

###### bots.updateUserEmojiStatus

:link: [*Change the emoji status of a user \(invoked by bots, see here &raquo; for more info on the full flow\)*](method/bots.updateUserEmojiStatus)

---

###### bots.toggleUserEmojiStatusPermission

:link: [*Allow or prevent a bot from changing our emoji status &raquo;*](method/bots.toggleUserEmojiStatusPermission)

---

###### bots.checkDownloadFileParams

:link: [*Check if a mini app can request the download of a specific file: called when handling web\_app\_request\_file\_download events &raquo;*](method/bots.checkDownloadFileParams)

---

###### bots.getAdminedBots

:link: [*Get a list of bots owned by the current user*](method/bots.getAdminedBots)

---

###### bots.updateStarRefProgram

:link: [*Create, edit or delete the affiliate program of a bot we own*](method/bots.updateStarRefProgram)

---

###### bots.setCustomVerification

:link: [*NOTHING*](method/bots.setCustomVerification)

---

###### bots.getBotRecommendations

:link: [*NOTHING*](method/bots.getBotRecommendations)

---

###### payments.getPaymentForm

:link: [*Get a payment form*](method/payments.getPaymentForm)

---

###### payments.getPaymentReceipt

:link: [*Get payment receipt*](method/payments.getPaymentReceipt)

---

###### payments.validateRequestedInfo

:link: [*Submit requested order information for validation*](method/payments.validateRequestedInfo)

---

###### payments.sendPaymentForm

:link: [*Send compiled payment form*](method/payments.sendPaymentForm)

---

###### payments.getSavedInfo

:link: [*Get saved payment information*](method/payments.getSavedInfo)

---

###### payments.clearSavedInfo

:link: [*Clear saved payment information*](method/payments.clearSavedInfo)

---

###### payments.getBankCardData

:link: [*Get info about a credit card*](method/payments.getBankCardData)

---

###### payments.exportInvoice

:link: [*Generate an invoice deep link*](method/payments.exportInvoice)

---

###### payments.assignAppStoreTransaction

:link: [*Informs server about a purchase made through the App Store: for official applications only*](method/payments.assignAppStoreTransaction)

---

###### payments.assignPlayMarketTransaction

:link: [*Informs server about a purchase made through the Play Store: for official applications only*](method/payments.assignPlayMarketTransaction)

---

###### payments.getPremiumGiftCodeOptions

:link: [*Obtain a list of Telegram Premium giveaway/gift code &raquo; options*](method/payments.getPremiumGiftCodeOptions)

---

###### payments.checkGiftCode

:link: [*Obtain information about a Telegram Premium giftcode &raquo;*](method/payments.checkGiftCode)

---

###### payments.applyGiftCode

:link: [*Apply a Telegram Premium giftcode &raquo;*](method/payments.applyGiftCode)

---

###### payments.getGiveawayInfo

:link: [*Obtain information about a Telegram Premium giveaway &raquo;*](method/payments.getGiveawayInfo)

---

###### payments.launchPrepaidGiveaway

:link: [*Launch a prepaid giveaway &raquo;*](method/payments.launchPrepaidGiveaway)

---

###### payments.getStarsTopupOptions

:link: [*Obtain a list of Telegram Stars topup options &raquo; as starsTopupOption constructors*](method/payments.getStarsTopupOptions)

---

###### payments.getStarsStatus

:link: [*Get the current Telegram Stars balance of the current account \(with peer=inputPeerSelf\), or the stars balance of the bot specified in peer*](method/payments.getStarsStatus)

---

###### payments.getStarsTransactions

:link: [*Fetch Telegram Stars transactions*](method/payments.getStarsTransactions)

---

###### payments.sendStarsForm

:link: [*Make a payment using Telegram Stars, see here &raquo; for more info*](method/payments.sendStarsForm)

---

###### payments.refundStarsCharge

:link: [*Refund a Telegram Stars transaction, see here &raquo; for more info*](method/payments.refundStarsCharge)

---

###### payments.getStarsRevenueStats

:link: [*Get Telegram Star revenue statistics &raquo;*](method/payments.getStarsRevenueStats)

---

###### payments.getStarsRevenueWithdrawalUrl

:link: [*Withdraw funds from a channel or bot&#039;s star balance &raquo;*](method/payments.getStarsRevenueWithdrawalUrl)

---

###### payments.getStarsRevenueAdsAccountUrl

:link: [*Returns a URL for a Telegram Ad platform account that can be used to set up advertisements for channel/bot in peer, paid using the Telegram Stars owned by the specified peer, see here &raquo; for more info*](method/payments.getStarsRevenueAdsAccountUrl)

---

###### payments.getStarsTransactionsByID

:link: [*Obtain info about Telegram Star transactions &raquo; using specific transaction IDs*](method/payments.getStarsTransactionsByID)

---

###### payments.getStarsGiftOptions

:link: [*Obtain a list of Telegram Stars gift options &raquo; as starsGiftOption constructors*](method/payments.getStarsGiftOptions)

---

###### payments.getStarsSubscriptions

:link: [*Obtain a list of active, expired or cancelled Telegram Star subscriptions &raquo;*](method/payments.getStarsSubscriptions)

---

###### payments.changeStarsSubscription

:link: [*Activate or deactivate a Telegram Star subscription &raquo;*](method/payments.changeStarsSubscription)

---

###### payments.fulfillStarsSubscription

:link: [*Re\-join a private channel associated to an active Telegram Star subscription &raquo;*](method/payments.fulfillStarsSubscription)

---

###### payments.getStarsGiveawayOptions

:link: [*Fetch a list of star giveaway options &raquo;*](method/payments.getStarsGiveawayOptions)

---

###### payments.getStarGifts

:link: [*Get a list of available gifts, see here &raquo; for more info*](method/payments.getStarGifts)

---

###### payments.saveStarGift

:link: [*Display or remove a received gift &raquo; from our profile*](method/payments.saveStarGift)

---

###### payments.convertStarGift

:link: [*Convert a received gift &raquo; into Telegram Stars: this will permanently destroy the gift, converting it into starGift\.convert\_stars Telegram Stars, added to the user&#039;s balance*](method/payments.convertStarGift)

---

###### payments.botCancelStarsSubscription

:link: [*Cancel a bot subscription*](method/payments.botCancelStarsSubscription)

---

###### payments.getConnectedStarRefBots

:link: [*Fetch all affiliations we have created for a certain peer*](method/payments.getConnectedStarRefBots)

---

###### payments.getConnectedStarRefBot

:link: [*Fetch info about a specific bot affiliation &raquo;*](method/payments.getConnectedStarRefBot)

---

###### payments.getSuggestedStarRefBots

:link: [*Obtain a list of suggested mini apps with available affiliate programs*](method/payments.getSuggestedStarRefBots)

---

###### payments.connectStarRefBot

:link: [*Join a bot&#039;s affiliate program, becoming an affiliate &raquo;*](method/payments.connectStarRefBot)

---

###### payments.editConnectedStarRefBot

:link: [*Leave a bot&#039;s affiliate program &raquo;*](method/payments.editConnectedStarRefBot)

---

###### payments.getStarGiftUpgradePreview

:link: [*NOTHING*](method/payments.getStarGiftUpgradePreview)

---

###### payments.upgradeStarGift

:link: [*NOTHING*](method/payments.upgradeStarGift)

---

###### payments.transferStarGift

:link: [*NOTHING*](method/payments.transferStarGift)

---

###### payments.getUniqueStarGift

:link: [*NOTHING*](method/payments.getUniqueStarGift)

---

###### payments.getSavedStarGifts

:link: [*NOTHING*](method/payments.getSavedStarGifts)

---

###### payments.getSavedStarGift

:link: [*NOTHING*](method/payments.getSavedStarGift)

---

###### payments.getStarGiftWithdrawalUrl

:link: [*NOTHING*](method/payments.getStarGiftWithdrawalUrl)

---

###### payments.toggleChatStarGiftNotifications

:link: [*NOTHING*](method/payments.toggleChatStarGiftNotifications)

---

###### payments.toggleStarGiftsPinnedToTop

:link: [*NOTHING*](method/payments.toggleStarGiftsPinnedToTop)

---

###### payments.canPurchaseStore

:link: [*NOTHING*](method/payments.canPurchaseStore)

---

###### payments.getResaleStarGifts

:link: [*NOTHING*](method/payments.getResaleStarGifts)

---

###### payments.updateStarGiftPrice

:link: [*NOTHING*](method/payments.updateStarGiftPrice)

---

###### payments.createStarGiftCollection

:link: [*NOTHING*](method/payments.createStarGiftCollection)

---

###### payments.updateStarGiftCollection

:link: [*NOTHING*](method/payments.updateStarGiftCollection)

---

###### payments.reorderStarGiftCollections

:link: [*NOTHING*](method/payments.reorderStarGiftCollections)

---

###### payments.deleteStarGiftCollection

:link: [*NOTHING*](method/payments.deleteStarGiftCollection)

---

###### payments.getStarGiftCollections

:link: [*NOTHING*](method/payments.getStarGiftCollections)

---

###### stickers.createStickerSet

:link: [*Create a stickerset*](method/stickers.createStickerSet)

---

###### stickers.removeStickerFromSet

:link: [*Remove a sticker from the set where it belongs\. The sticker set must have been created by the current user/bot*](method/stickers.removeStickerFromSet)

---

###### stickers.changeStickerPosition

:link: [*Changes the absolute position of a sticker in the set to which it belongs\. The sticker set must have been created by the current user/bot*](method/stickers.changeStickerPosition)

---

###### stickers.addStickerToSet

:link: [*Add a sticker to a stickerset\. The sticker set must have been created by the current user/bot*](method/stickers.addStickerToSet)

---

###### stickers.setStickerSetThumb

:link: [*Set stickerset thumbnail*](method/stickers.setStickerSetThumb)

---

###### stickers.checkShortName

:link: [*Check whether the given short name is available*](method/stickers.checkShortName)

---

###### stickers.suggestShortName

:link: [*Suggests a short name for a given stickerpack name*](method/stickers.suggestShortName)

---

###### stickers.changeSticker

:link: [*Update the keywords, emojis or mask coordinates of a sticker*](method/stickers.changeSticker)

---

###### stickers.renameStickerSet

:link: [*Renames a stickerset*](method/stickers.renameStickerSet)

---

###### stickers.deleteStickerSet

:link: [*Deletes a stickerset we created*](method/stickers.deleteStickerSet)

---

###### stickers.replaceSticker

:link: [*Replace a sticker in a stickerset &raquo;*](method/stickers.replaceSticker)

---

###### phone.getCallConfig

:link: [*Get phone call configuration to be passed to libtgvoip&#039;s shared config*](method/phone.getCallConfig)

---

###### phone.requestCall

:link: [*Start a telegram phone call*](method/phone.requestCall)

---

###### phone.acceptCall

:link: [*Accept incoming call*](method/phone.acceptCall)

---

###### phone.confirmCall

:link: [*Complete phone call E2E encryption key exchange &raquo;*](method/phone.confirmCall)

---

###### phone.receivedCall

:link: [*Optional: notify the server that the user is currently busy in a call: this will automatically refuse all incoming phone calls until the current phone call is ended*](method/phone.receivedCall)

---

###### phone.discardCall

:link: [*Refuse or end running call*](method/phone.discardCall)

---

###### phone.setCallRating

:link: [*Rate a call, returns info about the rating message sent to the official VoIP bot*](method/phone.setCallRating)

---

###### phone.saveCallDebug

:link: [*Send phone call debug data to server*](method/phone.saveCallDebug)

---

###### phone.sendSignalingData

:link: [*Send VoIP signaling data*](method/phone.sendSignalingData)

---

###### phone.createGroupCall

:link: [*Create a group call or livestream*](method/phone.createGroupCall)

---

###### phone.joinGroupCall

:link: [*Join a group call*](method/phone.joinGroupCall)

---

###### phone.leaveGroupCall

:link: [*Leave a group call*](method/phone.leaveGroupCall)

---

###### phone.inviteToGroupCall

:link: [*Invite a set of users to a group call*](method/phone.inviteToGroupCall)

---

###### phone.discardGroupCall

:link: [*Terminate a group call*](method/phone.discardGroupCall)

---

###### phone.toggleGroupCallSettings

:link: [*Change group call settings*](method/phone.toggleGroupCallSettings)

---

###### phone.getGroupCall

:link: [*Get info about a group call*](method/phone.getGroupCall)

---

###### phone.getGroupParticipants

:link: [*Get group call participants*](method/phone.getGroupParticipants)

---

###### phone.checkGroupCall

:link: [*Check whether the group call Server Forwarding Unit is currently receiving the streams with the specified WebRTC source IDs\.
Returns an intersection of the source IDs specified in sources, and the source IDs currently being forwarded by the SFU*](method/phone.checkGroupCall)

---

###### phone.toggleGroupCallRecord

:link: [*Start or stop recording a group call: the recorded audio and video streams will be automatically sent to Saved messages \(the chat with ourselves\)*](method/phone.toggleGroupCallRecord)

---

###### phone.editGroupCallParticipant

:link: [*Edit information about a given group call participant*](method/phone.editGroupCallParticipant)

---

###### phone.editGroupCallTitle

:link: [*Edit the title of a group call or livestream*](method/phone.editGroupCallTitle)

---

###### phone.getGroupCallJoinAs

:link: [*Get a list of peers that can be used to join a group call, presenting yourself as a specific user/channel*](method/phone.getGroupCallJoinAs)

---

###### phone.exportGroupCallInvite

:link: [*Get an invite link for a group call or livestream*](method/phone.exportGroupCallInvite)

---

###### phone.toggleGroupCallStartSubscription

:link: [*Subscribe or unsubscribe to a scheduled group call*](method/phone.toggleGroupCallStartSubscription)

---

###### phone.startScheduledGroupCall

:link: [*Start a scheduled group call*](method/phone.startScheduledGroupCall)

---

###### phone.saveDefaultGroupCallJoinAs

:link: [*Set the default peer that will be used to join a group call in a specific dialog*](method/phone.saveDefaultGroupCallJoinAs)

---

###### phone.joinGroupCallPresentation

:link: [*Start screen sharing in a call*](method/phone.joinGroupCallPresentation)

---

###### phone.leaveGroupCallPresentation

:link: [*Stop screen sharing in a group call*](method/phone.leaveGroupCallPresentation)

---

###### phone.getGroupCallStreamChannels

:link: [*Get info about RTMP streams in a group call or livestream\.
This method should be invoked to the same group/channel\-related DC used for downloading livestream chunks\.
As usual, the media DC is preferred, if available*](method/phone.getGroupCallStreamChannels)

---

###### phone.getGroupCallStreamRtmpUrl

:link: [*Get RTMP URL and stream key for RTMP livestreams\. Can be used even before creating the actual RTMP livestream with phone\.createGroupCall \(the rtmp\_stream flag must be set\)*](method/phone.getGroupCallStreamRtmpUrl)

---

###### phone.saveCallLog

:link: [*Save phone call debug information*](method/phone.saveCallLog)

---

###### phone.createConferenceCall

:link: [*NOTHING*](method/phone.createConferenceCall)

---

###### phone.deleteConferenceCallParticipants

:link: [*NOTHING*](method/phone.deleteConferenceCallParticipants)

---

###### phone.sendConferenceCallBroadcast

:link: [*NOTHING*](method/phone.sendConferenceCallBroadcast)

---

###### phone.inviteConferenceCallParticipant

:link: [*NOTHING*](method/phone.inviteConferenceCallParticipant)

---

###### phone.declineConferenceCallInvite

:link: [*NOTHING*](method/phone.declineConferenceCallInvite)

---

###### phone.getGroupCallChainBlocks

:link: [*NOTHING*](method/phone.getGroupCallChainBlocks)

---

###### langpack.getLangPack

:link: [*Get localization pack strings*](method/langpack.getLangPack)

---

###### langpack.getStrings

:link: [*Get strings from a language pack*](method/langpack.getStrings)

---

###### langpack.getDifference

:link: [*Get new strings in language pack*](method/langpack.getDifference)

---

###### langpack.getLanguages

:link: [*Get information about all languages in a localization pack*](method/langpack.getLanguages)

---

###### langpack.getLanguage

:link: [*Get information about a language in a localization pack*](method/langpack.getLanguage)

---

###### folders.editPeerFolders

:link: [*Edit peers in peer folder*](method/folders.editPeerFolders)

---

###### stats.getBroadcastStats

:link: [*Get channel statistics*](method/stats.getBroadcastStats)

---

###### stats.loadAsyncGraph

:link: [*Load channel statistics graph asynchronously*](method/stats.loadAsyncGraph)

---

###### stats.getMegagroupStats

:link: [*Get supergroup statistics*](method/stats.getMegagroupStats)

---

###### stats.getMessagePublicForwards

:link: [*Obtains a list of messages, indicating to which other public channels was a channel message forwarded\.
Will return a list of messages with peer\_id equal to the public channel to which this message was forwarded*](method/stats.getMessagePublicForwards)

---

###### stats.getMessageStats

:link: [*Get message statistics*](method/stats.getMessageStats)

---

###### stats.getStoryStats

:link: [*Get statistics for a certain story*](method/stats.getStoryStats)

---

###### stats.getStoryPublicForwards

:link: [*Obtain forwards of a story as a message to public chats and reposts by public channels*](method/stats.getStoryPublicForwards)

---

###### chatlists.exportChatlistInvite

:link: [*Export a folder &raquo;, creating a chat folder deep link &raquo;*](method/chatlists.exportChatlistInvite)

---

###### chatlists.deleteExportedInvite

:link: [*Delete a previously created chat folder deep link &raquo;*](method/chatlists.deleteExportedInvite)

---

###### chatlists.editExportedInvite

:link: [*Edit a chat folder deep link &raquo;*](method/chatlists.editExportedInvite)

---

###### chatlists.getExportedInvites

:link: [*List all chat folder deep links &raquo; associated to a folder*](method/chatlists.getExportedInvites)

---

###### chatlists.checkChatlistInvite

:link: [*Obtain information about a chat folder deep link &raquo;*](method/chatlists.checkChatlistInvite)

---

###### chatlists.joinChatlistInvite

:link: [*Import a chat folder deep link &raquo;, joining some or all the chats in the folder*](method/chatlists.joinChatlistInvite)

---

###### chatlists.getChatlistUpdates

:link: [*Fetch new chats associated with an imported chat folder deep link &raquo;\. Must be invoked at most every chatlist\_update\_period seconds \(as per the related client configuration parameter &raquo;\)*](method/chatlists.getChatlistUpdates)

---

###### chatlists.joinChatlistUpdates

:link: [*Join channels and supergroups recently added to a chat folder deep link &raquo;*](method/chatlists.joinChatlistUpdates)

---

###### chatlists.hideChatlistUpdates

:link: [*Dismiss new pending peers recently added to a chat folder deep link &raquo;*](method/chatlists.hideChatlistUpdates)

---

###### chatlists.getLeaveChatlistSuggestions

:link: [*Returns identifiers of pinned or always included chats from a chat folder imported using a chat folder deep link &raquo;, which are suggested to be left when the chat folder is deleted*](method/chatlists.getLeaveChatlistSuggestions)

---

###### chatlists.leaveChatlist

:link: [*Delete a folder imported using a chat folder deep link &raquo;*](method/chatlists.leaveChatlist)

---

###### stories.canSendStory

:link: [*Check whether we can post stories as the specified peer*](method/stories.canSendStory)

---

###### stories.sendStory

:link: [*Uploads a Telegram Story*](method/stories.sendStory)

---

###### stories.editStory

:link: [*Edit an uploaded story*](method/stories.editStory)

---

###### stories.deleteStories

:link: [*Deletes some posted stories*](method/stories.deleteStories)

---

###### stories.togglePinned

:link: [*Pin or unpin one or more stories*](method/stories.togglePinned)

---

###### stories.getAllStories

:link: [*Fetch the List of active \(or active and hidden\) stories, see here &raquo; for more info on watching stories*](method/stories.getAllStories)

---

###### stories.getPinnedStories

:link: [*Fetch the stories pinned on a peer&#039;s profile*](method/stories.getPinnedStories)

---

###### stories.getStoriesArchive

:link: [*Fetch the story archive &raquo; of a peer we control*](method/stories.getStoriesArchive)

---

###### stories.getStoriesByID

:link: [*Obtain full info about a set of stories by their IDs*](method/stories.getStoriesByID)

---

###### stories.toggleAllStoriesHidden

:link: [*Hide the active stories of a specific peer, preventing them from being displayed on the action bar on the homescreen*](method/stories.toggleAllStoriesHidden)

---

###### stories.readStories

:link: [*Mark all stories up to a certain ID as read, for a given peer; will emit an updateReadStories update to all logged\-in sessions*](method/stories.readStories)

---

###### stories.incrementStoryViews

:link: [*Increment the view counter of one or more stories*](method/stories.incrementStoryViews)

---

###### stories.getStoryViewsList

:link: [*Obtain the list of users that have viewed a specific story we posted*](method/stories.getStoryViewsList)

---

###### stories.getStoriesViews

:link: [*Obtain info about the view count, forward count, reactions and recent viewers of one or more stories*](method/stories.getStoriesViews)

---

###### stories.exportStoryLink

:link: [*Generate a story deep link for a specific story*](method/stories.exportStoryLink)

---

###### stories.report

:link: [*Report a story*](method/stories.report)

---

###### stories.activateStealthMode

:link: [*Activates stories stealth mode, see here &raquo; for more info*](method/stories.activateStealthMode)

---

###### stories.sendReaction

:link: [*React to a story*](method/stories.sendReaction)

---

###### stories.getPeerStories

:link: [*Fetch the full active story list of a specific peer*](method/stories.getPeerStories)

---

###### stories.getAllReadPeerStories

:link: [*Obtain the latest read story ID for all peers when first logging in, returned as a list of updateReadStories updates, see here &raquo; for more info*](method/stories.getAllReadPeerStories)

---

###### stories.getPeerMaxIDs

:link: [*Get the IDs of the maximum read stories for a set of peers*](method/stories.getPeerMaxIDs)

---

###### stories.getChatsToSend

:link: [*Obtain a list of channels where the user can post stories*](method/stories.getChatsToSend)

---

###### stories.togglePeerStoriesHidden

:link: [*Hide the active stories of a user, preventing them from being displayed on the action bar on the homescreen, see here &raquo; for more info*](method/stories.togglePeerStoriesHidden)

---

###### stories.getStoryReactionsList

:link: [*Get the reaction and interaction list of a story posted to a channel, along with the sender of each reaction*](method/stories.getStoryReactionsList)

---

###### stories.togglePinnedToTop

:link: [*Pin some stories to the top of the profile, see here &raquo; for more info*](method/stories.togglePinnedToTop)

---

###### stories.searchPosts

:link: [*Globally search for stories using a hashtag or a location media area, see here &raquo; for more info on the full flow*](method/stories.searchPosts)

---

###### stories.createAlbum

:link: [*NOTHING*](method/stories.createAlbum)

---

###### stories.updateAlbum

:link: [*NOTHING*](method/stories.updateAlbum)

---

###### stories.reorderAlbums

:link: [*NOTHING*](method/stories.reorderAlbums)

---

###### stories.deleteAlbum

:link: [*NOTHING*](method/stories.deleteAlbum)

---

###### stories.getAlbums

:link: [*NOTHING*](method/stories.getAlbums)

---

###### stories.getAlbumStories

:link: [*NOTHING*](method/stories.getAlbumStories)

---

###### premium.getBoostsList

:link: [*Obtains info about the boosts that were applied to a certain channel or supergroup \(admins only\)*](method/premium.getBoostsList)

---

###### premium.getMyBoosts

:link: [*Obtain which peers are we currently boosting, and how many boost slots we have left*](method/premium.getMyBoosts)

---

###### premium.applyBoost

:link: [*Apply one or more boosts &raquo; to a peer*](method/premium.applyBoost)

---

###### premium.getBoostsStatus

:link: [*Gets the current number of boosts of a channel/supergroup*](method/premium.getBoostsStatus)

---

###### premium.getUserBoosts

:link: [*Returns the lists of boost that were applied to a channel/supergroup by a specific user \(admins only\)*](method/premium.getUserBoosts)

---

###### smsjobs.isEligibleToJoin

:link: [*Check if we can process SMS jobs \(official clients only\)*](method/smsjobs.isEligibleToJoin)

---

###### smsjobs.join

:link: [*Enable SMS jobs \(official clients only\)*](method/smsjobs.join)

---

###### smsjobs.leave

:link: [*Disable SMS jobs \(official clients only\)*](method/smsjobs.leave)

---

###### smsjobs.updateSettings

:link: [*Update SMS job settings \(official clients only\)*](method/smsjobs.updateSettings)

---

###### smsjobs.getStatus

:link: [*Get SMS jobs status \(official clients only\)*](method/smsjobs.getStatus)

---

###### smsjobs.getSmsJob

:link: [*Get info about an SMS job \(official clients only\)*](method/smsjobs.getSmsJob)

---

###### smsjobs.finishJob

:link: [*Finish an SMS job \(official clients only\)*](method/smsjobs.finishJob)

---

###### fragment.getCollectibleInfo

:link: [*Fetch information about a fragment collectible, see here &raquo; for more info on the full flow*](method/fragment.getCollectibleInfo)